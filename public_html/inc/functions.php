<?php

    define('TEMPLATE_PATH', realpath(__DIR__) . '/../templates/');
    
    function getBlock($title, $location) {
        $contents = file_get_contents(TEMPLATE_PATH . $location . '.php');
        return '<h5 class="primer-heading">' . $title . '</h5>' . $contents .
        "<textarea>" . htmlspecialchars($contents) . "</textarea>";
    }
