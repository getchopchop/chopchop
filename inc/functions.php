<?php

    define('TEMPLATE_PATH', realpath(__DIR__) . '/../templates/');

    function getBlock($location) {
        $contents = file_get_contents(TEMPLATE_PATH . $location . '.php');

        $contents = preg_replace_callback('|{% highlight code %}([^{]+){% end highlight code %}|s', function($matches) {
            return '<pre class="primer-code"><code class="html">' . htmlspecialchars(trim($matches[1])) . '</code></pre>';
        }, $contents);

        return $contents;
    }
