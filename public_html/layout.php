<?php require_once('../src/inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('../src/inc/meta.php'); ?>
    <title>Primer - Layout</title>
<?php include('../src/templates/_styles.php'); ?>
</head>
<body>

    <div id="primer-wrapper">

        <aside class="aside" id="primer-sidebar">
            <div style="width: 330px;">
                <?php include('../src/templates/primer/header.php'); ?>
            </div>
        </aside>

        <main class="main" id="primer-content-wrapper">

            <button class="c-hamburger c-hamburger--htx js-menu-toggle primer-menu-toggle">
              <span>toggle menu</span>
            </button>

            <div class="container">


                <h1 class="primer-title">Layout</h1>

                <?php echo getBlock('Grid', 'layout/grid'); ?>

            </div>

        </main>

    </div><!--/#wrapper -->

    <?php include('../src/templates/_js.php'); ?>

</body>

</html>
