<?php
    require_once(__DIR__ . '/lib/Spyc.php');

    error_reporting(E_ALL);

    define('TEMPLATE_PATH', realpath(__DIR__ . '/../') . '/');

    function get($location, $options=array()) {
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
                if(preg_match("/(\d+\-)?" . $last . "/", $filename)) {
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

    function checkBlock($location) {
        $path = TEMPLATE_PATH . trim($location, '/');

        $files = recurseDir($location, $path, true);

        if(empty($files)) {
            header('location: /html/');
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
        $base = dirname($_SERVER['SCRIPT_NAME']) . "/../";
        return $base;
    }

    function getUrl($url = false) {
        return getBaseUrl().($url ?: '');
    }

    function getRequestPath() {
        $base = substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], 'index.php'));
        $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return substr($url_path, strlen($base) - 1);
    }

    function pathToUrl($path) {
        $base = dirname(__DIR__);
        return '/html' . substr($path, strlen($base), -4);
    }

    function isIndex() {
        return getRequestPath() === '/';
    }

    function imageUrl($src, array $args) {
        if (strlen($src) >= 4 && substr($src, 0, 4) !== 'http') {
            $src = getUrl($src);
        }

        $qs = http_build_query($args);

        return 'http://iweb:developer@isabelaweb1.cms.iwebcloud.co.uk/image/'.base64_encode($src).($qs ? '?'.$qs : '');
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

        public function printTitle() {
            $title = '';
            if(!$this->printTitle) {
                return '';
            }

            if($this->Title) {
                $title .= '<hgroup class="cc-title cc-title--actions"><div class="title__titles">';
            }
            if($this->Title) {
                $title .= '<h2 class="cc-title__main">' . $this->Title;
                if($this->Class) {
                    $title .= ' <code>' . $this->Class . '</code>';
                }
                $title .= '</h2>';
            }
            if($this->Title) {
                $title .= '</div>
                <div class="cc-title__actions">
                    <ul>
                        <li><a href="'.$this->getUrl().'" class="micro">Permalink</a></li>
                        <li><a href="'.$this->getUrl(true).'" class="micro">Preview</a></li>
                    </ul>
                </div></hgroup>';
            }
            if($this->Description) {
                $title .= '<div class="cc-title-desc"><p>' . $this->Description . '</p></div>';
            }
            return $title;
        }

        public function getUrl($preview = false){
            if(!$preview){
                return pathToUrl($this->path);
            }
            return pathToUrl($this->path) . '?preview';
        }
    }

    $toplevels = array('global', 'mixin', 'utility', 'atom', 'molecule', 'organism', 'template');
