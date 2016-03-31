<?php require_once('inc/functions.php'); ?>
<?php checkBlock(getRequestPath()); ?>
<!DOCTYPE HTML>
<html>
<head>
    <?php require_once('inc/meta.php'); ?>
    <title>Chop Chop - Little user interface patterns to get us going</title>
    <?php include('inc/favicons.php'); ?>
    <?php include('inc/styles.php'); ?>
</head>
<body>

    <?php if(!isset($_GET['preview'])) : ?>
            <div class="cc-toolbar">
                <a href="#" class="site-navigation__toggle cc-readout" data-cc-action="toggle" data-cc-target="navigation">Menu</a>
                <span class="cc-readout cc-readout--mq"></span>
            </div>

        <div class="site-wrapper cc-site-wrapper">

            <nav class="site-navigation" id="navigation">
                <div class="block-content site-navigation__content">
                    <?php include('inc/nav.php'); ?>
                </div>
            </nav>

            <main>
    <?php endif; ?>

              <?php if(isIndex()) { ?>
                  <header class="cc-header">
                      <div class="u-container">
                          <?php include('molecule/logo.php'); ?>
                      </div>
                  </header>
                    <div class="u-container">
                        <div class="u-container">
                            <hgroup class="hgroup page-title hero-title u-hidden">
                                <h1 class="hgroup__title">Chop Chop</h1>
                                <h4 class="hgroup__subtitle">Static Pattern Library</h4>
                            </hgroup>
                            <br>
                            <?php include('inc/nav-index.php'); ?>
                        </div>
                    </div>
             <?php } else {
                 $options = array(
                    'print_title' => !((isset($_GET['title']) && $_GET['title'] === 'false')),
                    'print_container' => !((isset($_GET['container']) && $_GET['container'] === 'false'))
                 );
                 echo getBlock(getRequestPath(), $options);
             }?>

    <?php if(!isset($_GET['preview'])) : ?>
            </main>

        </div><!--/#wrapper -->
    <?php endif; ?>

    <?php include('inc/scripts.php'); ?>

</body>
</html>
