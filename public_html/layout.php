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
            <div style="width: 130px;">
                <?php include('../src/templates/primer/header.php'); ?>
            </div>
        </aside>

        <main class="main" id="primer-content-wrapper">

            <button class="c-hamburger c-hamburger--htx js-menu-toggle primer-menu-toggle">
              <span>toggle menu</span>
            </button>

            <div class="container">

                <h1 class="primer-title">Layout</h1>
                <p>Coming soon...</p>

                <h1 class="primer-title">Grid</h1>
                <p>Grids equally divide their direct descendants. An example would be product listing of items. They should not be used for page layouts.</p>
                <p>There are classes available to apply to any element which follow the pattern <strong>.g-num-up</strong>. These work from two up to six columns.</p>
                <p>Custom grids can be made using mixin functions. Apply <strong>@mixin grid</strong> to the wrapper. Then <strong>@mixin grid-up($cols: 1, $gutter: false)</strong> to the wrapper. Gutters are optional and by default are set to false. <strong>grid-up</strong> can then be applied inside media queries to change both columns and gutters.</p>

                <?php echo getBlock('Grid', 'layout/grid'); ?>

            </div>

        </main>

    </div><!--/#wrapper -->

    <?php include('../src/templates/_js.php'); ?>

</body>

</html>
