<?php require_once('inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('inc/meta.php'); ?>
    <title>Primer - Layout</title>
<?php include('templates/_styles.php'); ?>
</head>
<body>

    <div id="primer-wrapper">

        <?php include('templates/primer/sidebar.php'); ?>

        <main class="main" id="primer-content-wrapper">



            <div class="container">

                <h1 class="primer-title">Layout</h1>
                <p>Layouts are similiar to grids in the way they work but are designed for columns of different widths.</p>
                <p>There are generic classes available for layouts with left hand sidebar, right hand sidebar and both.</p>
                <ul>
                    <li><code>@include layout;</code></li>
                    <li><code>@include layout-gitter($gutter);</code></li>
                    <li><code>@include layout-col($width);</code></li>
                    <li><code>@include layout-center;</code></li>
                </ul>

                <h2 class="primer-title">Grid</h2>
                <p>Grids equally divide their direct descendants. An example would be product listing of items. They should not be used for page layouts.</p>
                <p>There are classes available to apply to any element which follow the pattern <code>.g-num-up {}</code>. These work from two up to six columns.</p>
                <p>Custom grids can be created with the following functions:</p>
                <ul>
                    <li><code>@include grid;</code> generates a grid and should be applied to the containing div. No variables can be passed into this.</li>
                    <li><code>@include grid-gutter($gutter);</code> applies a gutter. It should be applied to the containing div. You can pass through an optional value for gutter which can be any unit (%, px, em, rem). By default this value uses the <code>$gutter</code> variable declared in the vars file. This can be used at any breakpoint to change the gutter size.</li>
                    <li><code>@include grid-up($cols);</code> declares how many columns should show on each row. By default this is just 1, so 100% width. This should be applied on the children of the grid container. This is so you can have multiple grid widths in one containing grid. If this mixin is not called divs will wrap to their natual widths. This can be called in any breakpoints to change the number show per row.</li>
                    <li><code>@include grid-center;</code> makes all items inside the grid centered. This should be applied to the container.</li>
                </ul>
                <?php echo getBlock('Grid', 'layout/grid'); ?>

            </div>

        </main>

    </div><!--/#wrapper -->

    <?php include('templates/_js.php'); ?>

</body>

</html>
