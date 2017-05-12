<?php

class Helper
{
    /*
     * Example Usage: Helper::parseCss('u-fill-contextual')
     */
    public static function parseCss($pattern)
    {
        $path = realpath(dirname(__FILE__) . '/../../build/css/styles.css');
        $css_contents = file_get_contents($path, true);
        $lines = explode("\n", $css_contents);
        $hasHeading = false;
        $previous_group = 'x';

        $matches = array();
        $regex = '/' . $pattern . '([^\s,{>\]"]+)?/';

        preg_match_all($regex, $css_contents, $matches);
        //sort($matches[0]);
        return array_unique($matches[0]);
    }

    /*
     * @var $width - width of the image
     * @var $height - height of the image
     * @var $fg - foreground (text) colour, 6 characters
     * @var $bg - background colour, 6 characters
     * @var $text - text to be displayed on the image
     *
     * Example Usage: Helper::getPlaceholder('400','550','ffffff','000000','ChopChop');
     */
    public static function getPlaceholder($width, $height, $fg = false, $bg = false, $text = false)
    {
        $placeholderUrl = 'http://pims.iweb.co.uk/';
        $placeholderUrl .= $width . 'x' . $height;

        if ($fg || $bg || $text) {
            $placeholderUrl .= '?';
        }

        if ($fg) {
            $placeholderUrl .= 'fg=' . $fg;
        }

        if ($bg) {
            $placeholderUrl .= '&bg=' . $bg;
        }

        if ($text) {
            $placeholderUrl .= '&text=' . $text;
        }

        return $placeholderUrl;
    }

    public static function printPlaceholder($width, $height, $fg = false, $bg = false, $text = false)
    {
        echo '<img src="' . self::getPlaceholder($height, $width, $fg, $bg, $text) . '"/>';
    }
}