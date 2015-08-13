<?php require_once('../src/inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('../src/inc/meta.php'); ?>
    <title>Primer - Helpers</title>
<?php include('templates/_styles.php'); ?>
</head>
<body>

    <div id="primer-wrapper">

        <?php include('templates/primer/sidebar.php'); ?>

        <main class="main" id="primer-content-wrapper">

            <button class="c-hamburger c-hamburger--htx js-menu-toggle primer-menu-toggle">
              <span>toggle menu</span>
            </button>

            <div class="container">

                <h1 class="primer-title">Helpers</h1>
                <p class="lead">We have a bank of helpers we can call upon in times of crisis. Use these sparingly!</p>

                <p>Helpers are a collection of styles that don't really do much by themselves. Some are utilities, (prefixed with u-) and some are mixins.</p>

            </div>

        </main>

    </div><!--/#wrapper -->

    <?php include('templates/_js.php'); ?>

</body>

</html>
