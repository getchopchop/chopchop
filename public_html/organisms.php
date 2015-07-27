<?php require_once('../src/inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('../src/inc/meta.php'); ?>
    <title>Primer - Organisms</title>
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
                
                
                <h1 class="primer-title">Organisms</h1>
                
                to add...
                <?php //echo getBlock('Headings', 'atoms/headings'); ?>
                
            </div>
            
        </main>
    
    </div><!--/#wrapper -->
    
    <?php include('../src/templates/_js.php'); ?>
    
</body>

</html>