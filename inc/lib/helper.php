<?php

    function parseCss($pattern) {
        $path = realpath(dirname(__FILE__) . '/../../build/css/styles.css');
        $css_contents = file_get_contents($path, true);
        $lines = explode("\n", $css_contents);
        $hasHeading = false;
        $previous_group = 'x';

        $matches = array();
        $regex = '/' . $pattern . '([^\s,{"]+)?/';

        preg_match_all($regex, $css_contents, $matches);
        //sort($matches[0]);
        return array_unique($matches[0]);
    }
