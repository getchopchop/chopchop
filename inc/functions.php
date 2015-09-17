<?php

    define('TEMPLATE_PATH', realpath(__DIR__) . '/../templates/');

    function getBlock($location) {

        ob_start();
        include(TEMPLATE_PATH . $location . '.php');
        $contents = ob_get_contents();
        ob_end_clean();

        $contents = preg_replace_callback('|{% highlight (.*?) %}(.+?(?={%)){% end highlight (.*?) %}|s', function($matches) {
            return '<pre class="primer-code"><code class="' .$matches[1]. '">' . htmlspecialchars(trim($matches[2])) . '</code></pre>';
        }, $contents);

        return $contents;
    }
