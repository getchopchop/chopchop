<?php

    define('TEMPLATE_PATH', realpath(__DIR__) . '/../templates/');

    function getBlock($location) {
        $path = TEMPLATE_PATH . trim($location, '/') . '.php';

        if (!file_exists($path)) {
            return '';
        }

        ob_start();
        include $path;
        $contents = ob_get_contents();
        ob_end_clean();

        $contents = preg_replace_callback('|{% highlight (.*?) %}(.+?(?={%)){% end highlight (.*?) %}|s', function($matches) {
            return '<pre class="primer-code"><code class="' .$matches[1]. '">' . htmlspecialchars(trim($matches[2])) . '</code></pre>';
        }, $contents);

        return $contents;
    }

    function getUrl($url = false) {
        static $baseUrl;

        if (!$baseUrl) {
            $baseUrl = substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], 'index.php'));
        }

        return $baseUrl.($url ?: '');
    }

    function getRequestPath() {
        $base = substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], 'index.php'));
        return substr($_SERVER['REQUEST_URI'], strlen($base) - 1);
    }

    function isIndex() {
        return getRequestPath() === '/';
    }

