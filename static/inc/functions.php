<?php

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
            if(){

            }
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

    $toplevels = array('branding', 'atoms', 'molecule', 'organisms', 'templates');
