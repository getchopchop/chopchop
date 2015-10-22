<?php require_once('inc/functions.php'); ?>
<?php $paths = explode("/", substr($_SERVER['REQUEST_URI'], 1));?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('inc/meta.php'); ?>
<title>Chop Chop - Little user interface patterns to get us going</title>
<?php include('inc/favicons.php'); ?>
<?php include('inc/styles.php'); ?>
</head>
<body>
    
    <div class="site-wrapper">
        
        <nav class="site-navigation">
            <div class="block-content site-navigation__content">
                <?php include('inc/nav.php'); ?>
            </div>
            <a href="#" class="site-navigation__toggle js-toggle-nav">Toggle Nav</a>
        </nav>
        
        <!-- <main class="main site-main"> -->
        <main>
            <div class="site-content">
             <?php if(isIndex()) { ?>
                     <?php include('inc/nav.php'); ?>
                 <?php } else {
                     echo getBlock(getRequestPath());
                }?>
            </div>
        </main>
        
    </div><!--/#wrapper -->
    <?php include('inc/scripts.php'); ?>
    
</body>
</html>