<?php

    define('TEMPLATE_PATH', realpath(__DIR__) . '/../templates/');

    function getBlock($location) {

        ob_start();
        include(TEMPLATE_PATH . $location . '.php');
        $contents = ob_get_contents();
        ob_end_clean();

        $contents = preg_replace_callback('|{% highlight code %}([^{]+){% end highlight code %}|s', function($matches) {
            return '<pre class="primer-code"><code class="html">' . htmlspecialchars(trim($matches[1])) . '</code></pre>';
        }, $contents);

        return $contents;
    }
