<?php require_once('inc/functions.php'); ?>
<?php
    if(getRequestPath() == '/' || getRequestPath() == '/pattern/') {
        header('Location: ' . getUrl('/pattern/branding/'));
        exit;
    }
?>
<?php checkBlock(getRequestPath()); ?>
<?php if( isset($_GET['preview'])) {
    $_GET['title'] = isset($_GET['title']) ? $_GET['title'] : 'false';
    $_GET['container'] = isset($_GET['container']) ? $_GET['container'] : 'false';
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="noindex">
    <title><?php printData('company', 'name'); ?> Component Library</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo getUrl('build/vendor/favicons/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" href="<?php echo getUrl('build/vendor/favicons/favicon-32x32.png'); ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo getUrl('build/vendor/favicons/favicon-16x16.png'); ?>" sizes="16x16">
    <link rel="manifest" href="<?php echo getUrl('build/vendor/favicons/manifest.json'); ?>">
    <link rel="mask-icon" href="<?php echo getUrl('build/vendor/favicons/safari-pinned-tab.svg'); ?>" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/vendor/normalize.css/normalize.css'); ?>" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/css/styles.css'); ?>" media="screen" />
    <?php /* ?>
    <script src="<?php echo getUrl('build/vendor/element-queries/ResizeSensor.js'); ?>"></script>
    <script src="<?php echo getUrl('build/vendor/element-queries/ElementQueries.js'); ?>"></script>
    <?php */ ?>
    <link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/css/chopchop-ui.css'); ?>" media="screen" />
    <?php if(!isset($_GET['preview'])) : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/vendor/prismjs/prism.css'); ?>" media="all" />
        
    <?php endif; ?>
</head>
<body class="cc-mode-<?php echo !isset($_GET['preview'])?'library':'preview' ?>">
    
    <div class="cc-devbar"><span class="cc-devbar__bp"></span></div>
    
    <?php if(!isset($_GET['preview'])) : ?>
        <header class="cc-header">
            <div class="u-container">
                <div class="grid g-center g-gutter-x g-stretch-last">
                    <div>
                        <a href="#" class="js-cc-toggle" id="cc-menu-trigger" data-cc-toggle-action="toggle" data-cc-toggle-target="#cc-nav">
                            <?php printSvg('general', 'menu', 'icon--lg icon-menu'); ?>
                            <?php printSvg('general', 'cross', 'icon--lg icon-cross'); ?>
                        </a>
                    </div>
                    <div>
                        <?php printData('company', 'name'); ?> Component Library
                    </div>
                </div>
            </div>
        </header>

        <div class="site-wrapper cc-site-wrapper">

            <nav class="cc-nav" id="cc-nav" data-cc-cascade="cc-menu-trigger">
                <div class="block-content site-navigation__content">
                    <?php require_once('inc/template/nav.php'); ?>
                </div>
            </nav>

            <main class="cc-main-content">
    <?php endif; ?>
    <?php if(isIndex()) { ?>
            <?php } else {
                $options = array(
                'print_title' => !((isset($_GET['title']) && $_GET['title'] === false)),
                'print_container' => !((isset($_GET['container']) && $_GET['container'] === false)),
                'print_code' => !((isset($_GET['code']) && $_GET['code'] === false)),
                'print_codeactive' => !((isset($_GET['codeactive']) && $_GET['codeactive'] === false))
                );
                $requestPath = Content::getRequestPath();
                echo Content::getContent($requestPath, $options);
                //trying to make Section redundant, so I've commented out for now - RL
                //echo Section::get(getRequestPath(), $options);
            }?>
    <?php if(!isset($_GET['preview'])) : ?>
            </main>
        </div><!--/#wrapper -->
    <?php endif; ?>

    <script src="<?php echo getUrl('build/vendor/svgxuse/svgxuse.js'); ?>" async></script>
    <!--[if IE 9]>
        <script src="<?php echo getUrl('build/vendor/svg4everybody/svg4everybody.js'); ?>" async></script>
        <script async>svg4everybody(); // run it now or whenever you are ready</script>
    <![endif]-->
    <script src="<?php echo getUrl('build/vendor/picturefill/picturefill.js'); ?>" async></script>
    <script src="<?php echo getUrl('build/vendor/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo getUrl('build/vendor/jquery/jquery-ui.min.js'); ?>"></script>
    
    <script src="<?php echo getUrl('build/vendor/llapgoch/melodeon.widget.js'); ?>"></script>
    <script src="<?php echo getUrl('build/vendor/enquire/enquire.js'); ?>"></script>
    <script src="<?php echo getUrl('build/js/chop.enquire.breakpoint.js'); ?>"></script>
    <script src="<?php echo getUrl('build/js/chop.base.widget.js'); ?>"></script>
    <script src="<?php echo getUrl('build/js/chop.toggle.widget.js'); ?>"></script>
    <script src="<?php echo getUrl('build/js/chop.collapsible.widget.js'); ?>"></script>
    <script src="<?php echo getUrl('build/js/chop.scroll.js'); ?>"></script>
    <script src="<?php echo getUrl('build/js/chop.listing.js'); ?>"></script>
    <script src="<?php echo getUrl('build/js/chop.product.js'); ?>"></script>
    <script src="<?php echo getUrl('build/js/script.js'); ?>"></script>

    <?php if(!isset($_GET['preview'])) : ?>
        <script src="<?php echo getUrl('build/vendor/jquery.cookie/jquery.cookie.js'); ?>"></script>
        <script src="<?php echo getUrl('build/vendor/prismjs/prism.js'); ?>"></script>
<!--        <script src="--><?php //echo getUrl('build/js/chopchop-ui.js'); ?><!--"></script>-->
    <?php endif; ?>

</body>
</html>