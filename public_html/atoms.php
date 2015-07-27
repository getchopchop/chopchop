<?php require_once('../src/inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('../src/inc/meta.php'); ?>
    <title>Primer - Atoms</title>
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
            
            <a href="#sidebar-toggle" id="sidebar-toggle" class="menu-toggle" style="position: absolute; top: 0; left: 0; z-index: 333;">
                <span class="menu-toggle__bar"></span>
                <span class="menu-toggle__label">menu</span>
            </a>
            
            <div class="container">
            
                <span style="font-size: 22px;">&rho; &infin; &omega; &loz; &fnof;</span>
                
                <h1 class="primer-title">Atoms</h1>
            
                <?php echo getBlock('Headings', 'atoms/headings'); ?>
                <?php echo getBlock('Paragraphs', 'atoms/paragraphs'); ?>
                <?php echo getBlock('Blockquotes', 'atoms/blockquotes'); ?>
                <?php echo getBlock('Horizontal Rule', 'atoms/hr'); ?>
                <?php echo getBlock('Buttons', 'atoms/buttons'); ?>
                <?php echo getBlock('Forms', 'atoms/forms'); ?>
                <?php echo getBlock('Inline Elements', 'atoms/inline'); ?>
                <?php echo getBlock('Lists', 'atoms/lists'); ?>
                <?php echo getBlock('Preformatted Text', 'atoms/pre'); ?>
                <?php echo getBlock('Tables', 'atoms/tables'); ?>
                <?php echo getBlock('Tags', 'atoms/tags'); ?>
                <?php echo getBlock('Timestamps', 'atoms/timestamps'); ?>
                <?php echo getBlock('Icons', 'atoms/icons'); ?>
                <?php echo getBlock('Social Icons', 'atoms/icons-social'); ?>
                
            </div>
            
        </main>
    
    </div><!--/#wrapper -->
    
    <?php include('../src/templates/_js.php'); ?>
    
</body>

</html>