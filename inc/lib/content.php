<?php

//TODO: Preview sort of working, fix coe view also and add readme 

class Content
{

    public static function getRequestPath() {
        $base = substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], 'index.php'));
        $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return substr($url_path, strlen($base) - 1);
    }

    public static function getContent($requestPath, $options)
    {
        //echo '<pre>';

        $html = '';
        $patternPath = dirname(dirname(dirname(__FILE__))) . $requestPath;
        $patternDirs = scandir($patternPath);
        foreach($patternDirs as $patternSection) {
            //we are in the pattern > section
            if(substr($patternSection, 0, 1) == '.') continue;
            $html .= '<section class="cc-pattern"><div class="u-container">';
            $patternSectionFiles = scandir($patternPath . '/' . $patternSection);

            $html .= self::sectionTitle($options, $patternSection);

            $html .= '<section class="cc-section">';

            foreach($patternSectionFiles as $patternSectionFile) {
                //we are in the pattern > section > files
                if(substr($patternSectionFile, 0, 1) == '.') continue;

                $patternSectionFilePath = $patternPath . $patternSection . '/' . $patternSectionFile;
                $html .= self::sectionContent( $patternSectionFile, $patternSectionFilePath );
            }

            $html .= '</section></div></section>';
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

        $sectionTitleSmall  = substr($section, 0, -4);
        $sectionTitle       = ucwords( str_replace('-', ' ', $sectionTitleSmall) );

        $content = '<section id="section-'.$section.'" class="">';
        $content    .= '<div class="u-container"><section class="">';
        $content        .= '<h5>'.$sectionTitle.'</h5><div class="cc-title__actions"><ul>';
        $content        .= '<li><a href="#" data-cc-action="toggle" data-cc-target="cc-code-' . substr(str_replace('/','-',self::getUrl(false)),1) . '" class="micro">Code</a></li>';
        $content        .= '<li><a href="'.$sectionTitleSmall.'#preview" class="micro">Preview</a></li>';
        $content        .= '</ul></div>';
        $content        .= '<div class="cc-demo">';
        //$content        .= '<div class="u-toggle" id="cc-code-' . substr(str_replace('/','-',self::getUrl(false)),1) . '"><pre class="cc-code"><code class="language-html">';
        $content            .= file_get_contents($patternSectionFilePath);
        //$content        .= '</code></pre></div>';
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

}