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
                <p>There are classes available to apply to any element which follow the pattern <code>.g-num-up {}</code>. These work from two up to six columns.</p>
                <p>Custom grids can be created with the following functions:</p>
                <ul>
                    <li><code>@include grid;</code> generates a grid and should be applied to the containing div. No variables can be passed into this.</li>
                    <li><code>@include grid-gutter($gap);</code> applies a gutter. It should be applied to the containing div. You can pass through an optional value for gutter which can be any unit (%, px, em, rem). By default this value uses the <code>$gutter</code> variable declared in the vars file. This can be used at any breakpoint to change the gutter size.</li>
                    <li><code>@include grid-up($cols);</code> declares how many columns should show on each row. By default this is just 1, so 100% width. This should be applied on the children of the grid container. This is so you can have multiple grid widths in one containing grid. If this mixin is not called divs will wrap to their natual widths. This can be called in any breakpoints to change the number show per row.</li>
                    <li><code>@include grid-center;</code> makes all items inside the grid centered. This should be applied to the container.</li>
                </ul>
                <?php echo getBlock('Grid', 'layout/grid'); ?>

            </div>

        </main>

    </div><!--/#wrapper -->

    <?php include('../src/templates/_js.php'); ?>

</body>

</html>
