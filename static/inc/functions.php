<?php
    require_once(__DIR__ . '/lib/Spyc.php');

    error_reporting(E_ALL);

    define('TEMPLATE_PATH', realpath(__DIR__ . '/../') . '/');

    function getBlock($location, $options=array()) {
        $printTitle = isset($options['print_title']) && $options['print_title'];
        $path = TEMPLATE_PATH . trim($location, '/');
        $files = array();

        if(is_dir($path)){
            $files = glob($path . '/*.php');
        }
        else {
            $path = TEMPLATE_PATH . trim($location, '/') . '.php';
            if (file_exists($path)) {
                $files[] = $path;
            }
        }

        if(empty($files)) {
            return '';
        }

        ob_start();
        foreach($files as $path) {
            $_t = new TemplateHelper(parseComments(file_get_contents($path)), $options);
            include $path;
        }
        $contents .= ob_get_contents();
        ob_end_clean();

        return $contents;
    }

    function getBaseUrl() {
        return dirname($_SERVER['SCRIPT_NAME']) . "/../";
    }

    function getUrl($url = false) {
        return getBaseUrl().($url ?: '');
    }

    function getRequestPath() {
        $base = substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], 'index.php'));
        return substr($_SERVER['REQUEST_URI'], strlen($base) - 1);
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

        $data = "";

        foreach($comments as $comment) {
            $data = array_merge($data, spyc_load($comment));
        }
        return $data;
    }

    class TemplateHelper {
        protected $data = array();
        protected $options = array();

        public function __construct($data = array(), $options=array()) {
            $this->data = $data;
            $this->options = $options;
        }

        public function __get($key) {
            if(isset($this->data[$key])){
                return $this->data[$key];
            }
            return '';
        }
    }

    $toplevels = array('branding', 'atom', 'molecule', 'organism', 'template');
