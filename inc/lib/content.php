<?php

class Content
{

    public static function getRequestPath() {
        $base = substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], 'index.php'));
        $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return substr($url_path, strlen($base) - 1);
    }

    public static function getContent($requestPath, $options)
    {
        $html = '';
        $patternPath = dirname(dirname(dirname(__FILE__))) . $requestPath;
        $patternDirs = scandir($patternPath);

        foreach($patternDirs as $patternSection) {
            //we are in the pattern > section
            if(substr($patternSection, 0, 1) == '.') continue;

            if(isset($_GET['preview'])) {
                //preview is enabled, so only output the template
                if (substr($patternSection, 0, 1) != '.' && substr($patternSection, -5) != '.html') {
                    $html .= self::getTemplate($patternPath . $patternSection);
                }

            } else {

                $patternSectionPath = $patternPath . '/' . $patternSection;
                $patternSectionFiles = scandir($patternSectionPath);

                $html .= '<div class="u-container"><section class="cc-pattern">';
                $html .= self::sectionTitle($options, $patternSection);
                $html .= '<section class="cc-section">';
                if( file_exists($patternSectionPath . '/readme.html') ) {
                    $html .= '<div class="u-block-top readme"><div class="u-container">' . file_get_contents($patternSectionPath . '/readme.html') . '</div></div>';
                }

                foreach ($patternSectionFiles as $patternSectionFile) {
                    //we are in the pattern > section > files
                    if (substr($patternSectionFile, 0, 1) == '.') continue;
                    if (substr($patternSectionFile, -5) == '.html') continue;

                    $patternSectionFilePath = $patternPath . $patternSection . '/' . $patternSectionFile;
                    $html .= self::sectionContent($patternSectionFile, $patternSectionFilePath);
                }

                $html .= '</section></section></div>';

            }
        }


        return $html;
    }

    public static function sectionTitle($options, $section) {
        if(!isset($options['print_title'])) {
            return '';
        }

        $title = '';
        if($section) {
            $sectionTitle = ucwords(str_replace('-',' ',$section ));
            $title .= '<div class="cc-title-container">';
            $title .= '<hgroup class="cc-title cc-title--actions" id="section-' . str_replace(' ', '-', strtolower($sectionTitle)) . '"><div class="title__titles">';
            $title .= '<h2 class="cc-title__main">' . $sectionTitle;
            $title .= '</h2>';
            $title .= '</div></hgroup>';
            $title .= "</div>";
        }

        return $title;
    }

    public static function sectionContent($section, $patternSectionFilePath) {

        $section        = substr($section, 0, -4);
        $sectionTitle   = ucwords( str_replace('-', ' ', $section) );

        $fileContents = self::getTemplate($patternSectionFilePath);

        if(isset($_GET['preview'])) {
            return $fileContents;
        }

        $content = '<section id="section-'.$section.'" class="u-space-sm-bottom">';
        $content    .= '<div><section class="u-separator-top u-block-sm">';
        $content        .= '<div class="u-space-sm-bottom grid g-center g-stretch-first"><div><h4>'.$sectionTitle.'</h4></div><div class="cc-title__actions"><ul class="nav nav--inline nav--pills">';
        $content        .= '<li><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target="#cc-code-' . $section . '" class="">Code</a></li>';
        $content        .= '<li><a href="'.self::getPreviewUrl($patternSectionFilePath).'" class="">Preview</a></li>';
        $content        .= '</ul></div></div>';
        $content        .= '<div class="cc-' . $section . '">';
        $content        .= '<div>';
        $content        .= $fileContents;
        $content        .= '</div>';
        $content        .= '<div class="u-toggle" id="cc-code-' . $section . '" data-cc-toggle-group="cc-section-' . $section . '"><pre class="cc-code"><code class="language-html">';
        $content        .= htmlentities($fileContents);
        $content        .= '</code></pre></div>';
        $content    .= '</div></section></div>';
        $content .= '</section>';

        return $content;
    }

    private static function getBaseUrl() {
        $base = dirname($_SERVER['SCRIPT_NAME']);
        return $base;
    }

    public static function getUrl($url = false) {
        $base_url = self::getBaseUrl();

        if($url && substr($url,0,1) === '/' ) {
            $url = substr($url,1);
        }

        if(substr($base_url, -1) !== '/') {
            $base_url .=  '/';
        }

        return $base_url.($url ?: '');
    }

    public static function getPreviewUrl($filePath) {

        $pathArray  = explode('/', $filePath);
        $file       = array_pop($pathArray);
        $directory  = array_pop($pathArray);

        return self::getRequestPath() . $directory . '?preview=true';
    }

    public static function getTemplate($file) {

        ob_start(); // start output buffer

        include $file;
        $template = ob_get_contents(); // get contents of buffer
        ob_end_clean();
        return $template;

    }

}
