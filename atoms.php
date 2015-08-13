<?php require_once('inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('inc/meta.php'); ?>
    <title>Primer - Atoms</title>
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

                <h1 class="primer-title">Atoms</h1>

                <?php echo getBlock('Headings', 'atoms/headings'); ?>
                <?php echo getBlock('Paragraphs', 'atoms/paragraphs'); ?>
                <?php echo getBlock('Blockquotes', 'atoms/blockquotes'); ?>
                <?php echo getBlock('Horizontal Rule', 'atoms/hr'); ?>
                <?php echo getBlock('Buttons', 'atoms/buttons'); ?>
                <?php echo getBlock('Animated Hamburger', 'atoms/hamburger'); ?>
                <?php echo getBlock('Forms', 'atoms/forms'); ?>
                <?php echo getBlock('Inline Elements', 'atoms/inline'); ?>
                <?php echo getBlock('Lists', 'atoms/lists'); ?>
                <?php echo getBlock('Preformatted Text', 'atoms/pre'); ?>
                <?php echo getBlock('Tables', 'atoms/tables'); ?>
                <?php echo getBlock('Tags', 'atoms/tags'); ?>
                <?php echo getBlock('Alerts', 'atoms/alerts'); ?>
                <?php echo getBlock('Timestamps', 'atoms/timestamps'); ?>
                <?php echo getBlock('Icons', 'atoms/icons'); ?>
                <?php echo getBlock('Social Icons', 'atoms/icons-social'); ?>

            </div>

        </main>

    </div><!--/#wrapper -->

    <?php include('templates/_js.php'); ?>

</body>

</html>
