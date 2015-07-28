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
            
            <button class="c-hamburger c-hamburger--htx js-menu-toggle primer-menu-toggle">
              <span>toggle menu</span>
            </button>
            
            <div class="container">
                
                <hgroup class="hgroup">
                  <h1 class="hgroup__title">Primer</h1>
                  <h5 class="hgroup__subtitle">a simple library of common reuseable patterns we use across all projects everyday</h5>
                </hgroup>

                <h3>Why Primer?</h3>

                <p>With responsive web design being the norm, we find ourselves fighting against our old processes. The traditional Wireframe > Design > Chop > Build > Go Live process isn&rsquo;t working, we need to move away from this flow and we need something to help us do that.</p>

                <p>We need a common design system that we all use and contribute to across all projects irrespective of platform used. If we all use this system and contribute to it, over time it will grow and be refined. A lot of the design work (particularly layout based) can be done by throwing elements together in the browser and seeing how they react to varying screen sizes. Instead of designing complete layouts we should ask ourselves questions like,</p>

                <p>What do my headings look like? What does a button look like? How many button variants do we need?</p>

                <p>Asking these question and designing the elements that make up the website is a much more effective way of producing a better end result.</p>

                <p>We often find ourselves initially stuck when starting a new project. Questions are asked: &quot;So what is the thing we are using for this project?&quot; We should be able to get going on a project irrespective of platform used or hosting setup. Front-end should be just that, we shouldn&rsquo;t need to install Magento or WordPress in order to start a project. Moving the front-end experience away from the platform lowers the barrier to entry but this doesn&rsquo;t mean we should ignore the platforms entirely.</p>

                <h3>The aims of Primer</h3>

                <p>Create a coherent frontend language that is platform agnostic Provide a starting point for any project Cut down the amount of repetitive work</p>

                <h3>What Primer is</h3>

                <p>Primer is a simple library of common reusable patterns we use across all projects everyday. the patterns are made up of HTML/CSS, (SCSS) and JavaScript.</p>

                <h3>What Primer is not</h3>

                <p>A complete framework. We wanted to keep primer small.</p>

                <h3>The Roadmap</h3>

                <ul>
                    <li>Automate Functional Testing?</li>
                    <li>Bundle with Gerbil so everyone gets the library on their laptops.</li>
                    <li>Product Magento templates.</li>
                    <li>WordPress theme?</li>
                </ul>
            </div>


        </main>
    
    </div><!--/#wrapper -->
    
    <?php include('../src/templates/_js.php'); ?>

</body>
</html>
