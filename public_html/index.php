<?php require_once('../src/inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('../src/inc/meta.php'); ?>
    <title>Primer - Little user interface patterns to get us going</title>
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
                
                <h1 class="primer-title">Welcome to Primer</h1>
                
                <p>Primer is a simple library of common reuseable patterns we use across all projects everyday.</p>
                
                <h2>How primer came about</h2>
                
                <p>We oftern find ourselves initially stuck when starting a new project. Questions are asked, "Sooo whats the thing we are using for this project?" We are in this position  Mention <a href="http://patternlab.io/">Brad Frost</a></p>
        
                <h3>The aims of primer</h3>
                <ul>
                    <li>Cut down the amount of repetitive work</li>
                    <li>Create a coherent frontend language that is platform agnostic</li>
                    <li>Provide a starting point for any project</li>
                </ul>
        
                <h3>What primer is not</h3>
                <ul>
                    <li>A complete framework</li>
                </ul>
        
                <h3>The Roadmap</h3>
                <ul>
                    <li>Bundle with Gerbil</li>
                    <li>Integrate Magento Templates</li>
                </ul>
            </div>


        </main>
    
    </div><!--/#wrapper -->
    
    <?php include('../src/templates/_js.php'); ?>

</body>
</html>
