<?php

class Content
{

    public static function getRequestPath() {

        $base = substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], 'index.php'));
        $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        return substr($url_path, strlen($base) - 1);
    }

    public static function getBaseFilePath() {

        return dirname(dirname(dirname(__FILE__)));
    }

    public static function getContent($requestPath, $options)
    {

        if(isset($_GET['preview'])) {
            return self::loadPreview($requestPath);
        }

        $html = '';
        $patternPath = self::getBaseFilePath() . $requestPath;
        $patternDirs = scandir($patternPath);
        $i = 0;

        foreach($patternDirs as $patternSection) {
            //we are in the pattern > section
            if(substr($patternSection, 0, 1) == '.') continue;

            $patternSectionPath = $patternPath . '/' . $patternSection;
            $patternSectionFiles = scandir($patternSectionPath);

            $html .= '<div class="cc-pattern">';
            $html .= self::sectionTitle($options, $patternSection);
            $html .= '<div class="cc-pattern__body">';
            if( file_exists($patternSectionPath . '/readme.php') ) {
                $html .= self::loadReadme($patternSectionPath);
            }

            foreach ($patternSectionFiles as $patternSectionFile) {
                //we are in the pattern > section > files
                if (substr($patternSectionFile, 0, 1) == '.') continue;
                if ($patternSectionFile == 'readme.php') continue;

                $patternSectionFilePath = $patternPath . $patternSection . '/' . $patternSectionFile;
                $html .= self::sectionContent($patternSectionFile, $patternSectionFilePath, $i);
                $i++;
            }

            $html .= '</div></div>';
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
            $title .= '<span class="cc-pattern__anchor" id="section-' . str_replace(' ', '-', strtolower($sectionTitle)) . '"></span><div class="cc-pattern__header">';
            $title .= '<h3><a href="#section-' . str_replace(' ', '-', strtolower($sectionTitle)) . '"><svg class="icon icon--lg">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/build/img/vector/general/symbol/sprite-symbol.svg#link"></use>
        </svg> ' . $sectionTitle . '</a></h3>';
            $title .= "</div>";
        }

        return $title;
    }

    public static function sectionContent($section, $patternSectionFilePath, $i = 0) {

        $section        = substr($section, 0, -4);
        $sectionTitle   = ucwords( str_replace('-', ' ', $section) );
        $sectionId      = $section . '-' . $i;

        $fileContents = self::getTemplate($patternSectionFilePath);

        if(isset($_GET['preview'])) {
            return $fileContents;
        }

        $content = '
        <div class="cc-demo">
            <div class="cc-demo__header">
                <p>' . $sectionTitle . '</p>
                <ul>
                    <li><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target="#cc-code-' . $sectionId . '">Code</a></li>
                    <li><a href="'.self::getPreviewUrl($patternSectionFilePath).'">Preview</a></li>
                </ul>
            </div>
            <div class="cc-demo__demo">
                ' . $fileContents . '
            </div>
            <div class="cc-demo__code u-toggle" id="cc-code-' . $sectionId . '" data-cc-toggle-group="cc-section-' . $section . '">
                <pre><code class="language-html">' . htmlentities($fileContents) . '</code></pre>
            </div>
        </div>
        ';

        return $content;
    }

    private static function getBaseUrl() {

       return dirname($_SERVER['SCRIPT_NAME']);
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
        $file       = substr($file, 0, -4);
        $directory  = array_pop($pathArray);

        return self::getRequestPath() . $directory . '/' . $file . '?preview=true';
    }

    public static function getTemplate($file) {

        ob_start(); // start output buffer

        include $file;
        $template = ob_get_contents(); // get contents of buffer
        ob_end_clean();
        return $template;
    }

    public static function loadPreview($requestPath) {

        $patternSectionFile = self::getBaseFilePath() . $requestPath.'.php';

        return self::getTemplate($patternSectionFile);
    }

    public static function loadReadme($file) {
        $html = '<div class="cc-pattern__doc">';
        ob_start(); // start output buffer
        include($file . '/readme.php');
        $html .= ob_get_contents(); // get contents of buffer
        ob_end_clean();

        $html .= '</div>';

        return $html;
    }

}
