<?php
    require_once(__DIR__ . '/lib/Spyc.php');
    require_once(__DIR__ . '/lib/navigation.php');

    error_reporting(E_ALL);

    define('TEMPLATE_PATH', realpath(__DIR__ . '/../') . '/');
    define('DS', DIRECTORY_SEPARATOR);

    function get($location, $options=array()) {
        $location = 'pattern/' . $location;

        if(substr($location, -1) === '/') {
            $path = TEMPLATE_PATH . trim($location, '/');
            $files = recurseDir($location, $path);
        }
        else {
            $parts = explode('/', trim($location, '/'));
            $last = array_pop($parts);
            $parts[] = "*".$last.".php";
            $path = TEMPLATE_PATH . implode('/', $parts);
            $filestocheck = glob($path);
            $files = array();
            foreach ($filestocheck as $f) {
                $filename = basename($f, '.php');
                if(preg_match("/^(\d+\-)?" . $last . "/", $filename)) {
                    $files[] = $f;
                }
            }
        }

        return getContents($files, $options);
    }

    function getPattern($location, $options=array()) {
        return get($location, $options);
    }

    function printPattern($location, $options=array()) {
        echo get($location, $options);
    }

    function getdata($file, $section = null, $num = null) {
        $yamlfile = file_get_contents(dirname(__FILE__) . '/../data/' . $file . '.yml');

        $yamlfile_contents = array();
        $yamlfile_data = array_merge($yamlfile_contents, spyc_load($yamlfile));

        $data = $yamlfile_data[$file];

        if(empty($section) && !is_int($section)) {
            $data = $data[array_rand($data)];
        } else {
            if(is_array($data[$section])) {
                if(empty($num)) {
                    $data = $data[$section][array_rand($data[$section])];
                } else {
                    $data = $data[$section][$num];
                }
            } else {
                $data = $data[$section];
            }
        }

        return $data;
    }

    function printData($file, $section = null, $num = null) {
        echo getData($file, $section, $num);
    }

    function printSvg($folder = 'general', $hash, $class = '') {
        echo '<svg class="icon ' . $class . '">
            <use xlink:href="' . getUrl('build/img/vectors/' . $folder . '/symbol/sprite-symbol.svg') . '#' . $hash  . '" />
        </svg>';
    }

    function checkBlock($location) {
        $path = TEMPLATE_PATH . trim($location, '/');

        $files = recurseDir($location, $path, true);

        if(empty($files)) {
            header('location: /pattern/');
        }
    }

    function recurseDir($location, $path, $glob=false) {
        $files = array();
        if(is_dir($path)){
            $files = array_merge($files, glob($path . '/*.php'));
            foreach(glob($path . '/*', GLOB_ONLYDIR) as $dir) {
                $files = array_merge($files, recurseDir($location, $dir));
            }
        }
        else {
            $path = TEMPLATE_PATH . dirname($location);
            if($glob){
                $path .= '/*' . basename($location) . '.php';
                $files = array_merge($files, glob($path));
            }
            else{
                $path .= '/' . basename($location) . '.php';
                if(file_exists($path)){
                    $files[] = $path;
                }
            }
        }
        natsort($files);
        return $files;
    }

    function getContents($files, $options) {
        $printContainer = false;
        $contents = '';
        ob_start();
        foreach($files as $path) {
            $_t = new TemplateHelper(parseComments(file_get_contents($path)), $path, $options);
            $printContainer |= $_t->shouldPrintContainer();
            $classes = array('cc-section');
            if($_t->Section){
                $classes[] =  $_t->Section;
            }
            if($printContainer) {
                echo '<section class="'.implode(' ', $classes).'"><div class="u-container">';
            }

            echo $_t->printTitle();
            include $path;

            if($printContainer) {
                echo '</div></section>';
            }
        }
        $contents .= ob_get_contents();
        ob_end_clean();
        return $contents;
    }

    function getBlock($location, $options=array()) {
        $path = TEMPLATE_PATH . trim($location, '/');

        $files = recurseDir($location, $path);

        if(empty($files)) {
            return '';
        }

        return getContents($files, $options);
    }

    function getBaseUrl() {
        $base = dirname($_SERVER['SCRIPT_NAME']);
        return $base;
    }

    function getUrl($url = false) {
        $base_url = getBaseUrl();

        if($url && substr($url,0,1) === '/' ) {
            $url = substr($url,1);
        }

        if(substr($base_url, -1) !== '/') {
            $base_url .=  '/';
        }

        return $base_url.($url ?: '');
    }

    function getRequestPath() {
        $base = substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], 'index.php'));
        $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return substr($url_path, strlen($base) - 1);
    }

    function pathToUrl($path) {
        $base = dirname(__DIR__);
        $path = realpath($path);
        $path = substr($path, strlen($base), -4);
        return $path;
    }

    function isIndex() {
        return getRequestPath() === '/';
    }

    function title($title, $class, $description='') {
        return array(
            'title'=>$title,
            'class'=>$class,
            'description'=>$description
        );
    }

    function parseComments($source) {
        $tokens = token_get_all( $source );
        $comments = array();
        $comment = array(
            T_COMMENT,
            T_DOC_COMMENT
        );
        foreach( $tokens as $token ) {
            if( !in_array($token[0], $comment) ) {
                continue;
            }
            $matches = array();
            if(preg_match('#(?:/\*+)((?:(?!\*+/).)*)#ms', $token[1], $matches)){
                $comments[] = $matches[1];
            }
            else{
                $comments[] = substr(trim($token[1]), 2);
            }
        }

        $data = array();

        foreach($comments as $comment) {
            $data = array_merge($data, spyc_load($comment));
        }
        return $data;
    }

    class TemplateHelper {
        protected $data = array();
        protected $options = array();

        public function __construct($data = array(), $path, $options=array()) {
            $this->printTitle = isset($options['print_title']) && $options['print_title'];
            $this->printContainer = isset($options['print_container']) && $options['print_container'];
            $this->printCode = isset($options['print_code']) && $options['print_code'];
            $this->printCodeActive = isset($options['print_codeactive']) && $options['print_codeactive'];
            $this->data = $data;
            $this->path = $path;
            $this->options = $options;
        }

        public function __get($key) {
            if(isset($this->data[$key])){
                return $this->data[$key];
            }
            return '';
        }

        public function shouldPrintContainer(){
            return $this->printContainer && $this->Container !== false;
        }

        public function shouldPrintCode(){
            return $this->printCode && $this->Code !== false;
        }

        public function shouldPrintCodeActive(){
            return $this->printCodeActive && $this->CodeActive == true;
        }

        public function printTitle() {
            if(!$this->printTitle) {
                return '';
            }

            $title = '';
            if($this->Title) {
                $title .= '<div class="cc-title-container">';
                $title .= '<hgroup class="cc-title cc-title--actions" id="section-' . str_replace(' ', '-', strtolower($this->Title)) . '"><div class="title__titles">';
                $title .= '<h2 class="cc-title__main">' . $this->Title;
                if($this->Class) {
                    $title .= ' <code>' . $this->Class . '</code>';
                }
                $title .= '</h2>';
                $title .= '</div>
                <div class="cc-title__actions">
                    <ul>';
                if($this->shouldPrintCode()) {
                    $title .= '<li><a href="#" data-cc-action="toggle" data-cc-target="cc-code-' . substr(str_replace('/','-',$this->getUrl(false)),1) . '" class="micro">Code</a></li>';
                }
                $title .= '<li><a href="'.$this->getUrl(true).'" class="micro">Preview</a></li>
                    </ul>
                </div></hgroup>';
            }
            if($this->Description) {
                $title .= '<div class="cc-title-desc"><p>' . $this->Description . '</p></div>';
            }
            if($this->Title) {
                $title .= "</div>";
            }
            return $title;
        }

        public function getUrl($preview = false) {
            if(!$preview) {
                return pathToUrl($this->path);
            }
            return pathToUrl($this->path) . '?preview';
        }
    }

class Section
{
    public $children = array();

    public static function get($location, $options) {
        $section = new Section($location);
        return $section->getContent($options);
    }

    public function __construct($location) {
        $this->location = $location;
        $path = TEMPLATE_PATH . $this->location;

        $this->paths = $this->getContentPaths($path);

        if($children = $this->loadChildren($path)) {
            $this->children = $children;
        }

    }

    public function getContentPaths($path) {
        if(is_dir($path)) {
            return false;
        }

        if(file_exists($path)) {
            return array($path);
        }

        $last = basename($path);
        $path = dirname($path) . DS . '*' . $last . '.php';
        $paths = array_filter(glob($path) , function($path) use ($last) {
            return preg_match("/^(\d+\-)?" . $last . "/", basename($path, '.php'));
        });

        if(!empty($paths)) {
            return $paths;
        }

        throw new Exception('No content in path: ' . $path);
    }

    public function loadChildren($path) {
        $children = array();
        if(!is_dir($path)) {
            return false;
        }
        $paths = glob($path . DS . '*');
        foreach($paths as $path) {
            $children[] = new Section($this->pathToLocation($path));
        }
        return $children;
    }

    protected function pathToLocation($path) {
        if (substr($path, 0, strlen(TEMPLATE_PATH)) == TEMPLATE_PATH) {
            return substr($path, strlen(TEMPLATE_PATH));
        }
        return $path;
    }

    public function getContent($options) {
        $contents = '<section id="section-'.basename($this->location, '.php').'" class="cc-pattern">';
        foreach($this->children as $child) {
            $contents .= $child->getContent($options);
        }
        if($this->paths) {
            $contents .= $this->getContents($this->paths, $options);
        }
        $contents .= '</section>';
        return $contents;
    }

    protected function getContents($paths, $options) {
        $printContainer = false;
        $printCode = false;
        $printCodeActive = false;
        ob_start();
        foreach($paths as $path) {
            $_t = new TemplateHelper(parseComments(file_get_contents($path)), $path, $options);
            $printContainer |= $_t->shouldPrintContainer();
            $printCode |= $_t->shouldPrintCode();
            $printCodeActive |= $_t->shouldPrintCodeActive();

            $classes = array('cc-section');
            if($_t->Section){
                $classes[] =  $_t->Section;
            }

            if($printContainer && !isset($_GET['preview'])) {
                echo '<div class="u-container">';
            }

            if(!isset($_GET['preview'])) {
                echo $_t->printTitle();
            }

            if($printContainer && !isset($_GET['preview'])) {
                echo '</div>';
                echo '<div class="u-container"><section class="'.implode(' ', $classes).'"><div class="cc-demo">';
            }

            include $path;

            if($printContainer && !isset($_GET['preview'])) {
                echo '</div>';
            }

            if($printCode && !isset($_GET['preview'])) {
                echo '<div class="u-toggle';
                if($printCodeActive) {
                    echo ' is-active';
                }
                echo'" id="cc-code-' . substr(str_replace('/','-',$_t->getUrl(false)),1) . '"><pre class="cc-code"><code class="language-html">';
                    ob_start();
                    include $path;
                    $html = ob_get_contents();
                    ob_end_clean();
                    echo htmlentities(trim($html));
                echo '</code></pre></div>';
            }

            if($printContainer && !isset($_GET['preview'])) {
                echo '</section></div>';
            }
        }
        $contents .= ob_get_contents();
        ob_end_clean();
        return $contents;
    }
}
