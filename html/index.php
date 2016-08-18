<?php require_once('inc/functions.php'); ?>
<?php checkBlock(getRequestPath()); ?>
<?php if( isset($_GET['preview'])) {
    $_GET['title'] = isset($_GET['title']) ? $_GET['title'] : 'false';
    $_GET['container'] = isset($_GET['container']) ? $_GET['container'] : 'false';
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php require_once('inc/meta.php'); ?>
    <title>Chop Chop - Little user interface patterns to get us going</title>
    <?php include('inc/favicons.php'); ?>
    <?php include('inc/head.php'); ?>
</head>
<body>

    <?php if(!isset($_GET['preview'])) : ?>
        <header class="cc-header">
            <ul>
                <li><a href="#" id="cc-menu-trigger" data-cc-action="toggle" data-cc-target="cc-nav">Menu</a></li>
                <li class="cc-readout"><span></span></li>
            </ul>
        </header>

        <div class="cc-toolbar"></div>

        <div class="site-wrapper cc-site-wrapper">

            <nav class="cc-nav" id="cc-nav" data-cc-cascade="cc-menu-trigger cc-overlay">
                <div class="block-content site-navigation__content">
                    <?php include('inc/nav.php'); ?>
                </div>
            </nav>

            <main class="cc-main-content">
    <?php endif; ?>
        <?php if(isIndex()) { ?>
             <?php } else {
                 $options = array(
                    'print_title' => !((isset($_GET['title']) && $_GET['title'] === 'false')),
                    'print_container' => !((isset($_GET['container']) && $_GET['container'] === 'false'))
                 );
                 echo Section::get(getRequestPath(), $options);
             }?>
    <?php if(!isset($_GET['preview'])) : ?>
            </main>

        </div><!--/#wrapper -->
    <?php endif; ?>

    <?php include('inc/footer.php'); ?>
    
    <div id="cc-overlay" class="cc-overlay overlay" data-cc-action="deactivate" data-cc-target="cc-nav"></div>
</body>
</html>
