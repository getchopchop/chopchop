<?php require_once('inc/functions.php'); ?>
<?php $paths = explode("/", substr($_SERVER['REQUEST_URI'], 1));?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('inc/meta.php'); ?>
    <title>Chop Chop - Little user interface patterns to get us going</title>
<?php include('inc/styles.php'); ?>
</head>
<body>

    <div class="site-wrapper">
        
        
        <header class="site-header">
            <a href="/" class="logo">
                <span class="logo__art"><img src="/src/img/chopper_white.svg" class="logo__img" /></span>
                <span class="logo__text"><span>Chop</span> <span>Chop</span></span>
            </a>
        </header>
        
        <nav class="site-navigation">
            <a href="" class="site-navigation__toggle block-toggle">Show Navigation</a>
            <div class="block-content site-navigation__content">
                <?php include('inc/nav.php'); ?>
            </div>
        </nav>
        
        <main class="main site-main">
            
            <header class="site-masthead">            
                <?php if($_SERVER['REQUEST_URI'] != '/') { ?>

                    <hgroup class="hgroup">
                        <?php
                            $wrapped = array_map(
                               function ($el) {
                                  return "<a href='#'>{$el}</a>";
                               },
                               $paths
                            );
                        ?>
                        <span class="breadcrumbs"><?php echo "&larr;&nbsp;", implode($wrapped, "&nbsp;&larr;&nbsp;"); ?></span>
                        <h1 class="hgroup__title"><?php echo array_pop($paths);?></h1>
                        
                    </hgroup>
                
                <?php } else { ?>
                    <a href="/" class="logo">
                        <hgroup class="hgroup">
                          <h1 class="hgroup__title">Get Chopping</h1>
                          <h5 class="hgroup__subtitle">Everything you need for the perfect slice.</h5>
                        </hgroup>
                    </a>
                <?php } ?>
            
            </header>
            
            <div class="site-content">
            
                <?php if($_SERVER['REQUEST_URI'] == '/') { ?>
                
                <div class="well">
                    <div class="container">

                            <h3>Why Chop Chop?</h3>

                            <p class="lead">With responsive web design being the norm, we find ourselves fighting against our old processes.</p>
                            <p>On a fixed width website we could just &ldquo;Chop&rdquo; a Photoshop picture of the website to deliver to our clients and it would be <em>almost</em> pixel perfect.</p>
                            <p>This is not the case anymore, if we produce a Photoshop picture for a responsive site it is a mockup of what the site <em>could</em> look like at <em>that</em> particular screen size. It will not show us how the design behaves when the screen is resized.</p>
                            
                            <p>The traditional Wireframe > Design > Chop > Build > Go Live process isn&rsquo;t working, we need to move away from this flow and we need something to help us do that.</p>

                            <p>We need a common design system that we all use and contribute to across all projects irrespective of platform used. If we all use this system and contribute to it, over time it will grow and be refined. A lot of the design work (particularly layout based) can be done by throwing elements together in the browser and seeing how they react to varying screen sizes. Instead of designing complete layouts we should ask ourselves questions like,</p>

                            <ul>
                                <li>What do my headings look like?</li>
                                <li>What does a button look like?</li>
                                <li>How many button variants do we need?</li>
                            </ul>

                            <p>Asking these question and designing the elements that make up the website is a much more effective way of producing a better end result.</p>

                            <p>Also we often find ourselves initially stuck when starting a new project. Questions are asked:</p>
                            
                            <p><blockquote>&quot;So what is the thing we are using for this project?&quot;</blockquote></p>

                            <p>We should be able to get going on a project irrespective of platform used or hosting setup. Front-end should be just that, we shouldn&rsquo;t need to install Magento or WordPress in order to start a project. Moving the front-end experience away from the platform lowers the barrier to entry but this doesn&rsquo;t mean we should ignore the platforms entirely. We will be looking to see how we can easily integrate this with WordPress and Magento soon.</p>
                            
                            
                        </div>
                    </div>
                    
                    <div class="well">
                        <div class="container">
                            <h2>Enter Chop Chop...</h2>
                            <h3>The aims of Chop Chop</h3>

                            <ul>
                                <li>Create a coherent frontend language that is platform agnostic</li>
                                <li>Provide a starting point for any project</li>
                                <li>Cut down the amount of repetitive work</li>
                            </ul>

                            <h3>What Chop Chop is</h3>

                            <p>Chop Chop is a simple library of common reusable patterns we use across all projects everyday. the patterns are made up of HTML/CSS, (SCSS) and JavaScript.</p>

                            
                            <h3>What Chop Chop is not</h3>

                            <p>A complete framework. We wanted to keep Chop Chop small.</p>
                            
                        </div>
                    </div>
                    
                    <div class="well">
                        <div class="container">
                            <h3>The Chop Chop Toolkit</h3>
                            <p>The modern web developer is now expected to know 9348 different program languages and syntaxes. We have selected a few technologies that help us build this site and will hopefully help you too.</p>
                            <a href="/overview/toolkit" class="btn">Read more</a>
                            
                        </div>
                    </div>
                    
                    <div class="well">
                        <div class="container">
                            <h3>The Roadmap</h3>
                            <ul>
                                <li>Automate Functional Testing?</li>
                                <li>Integration w/Isabela: https://gitlab.iweb.co.uk/iweb/isabela or https://gitlab.iweb.co.uk/iweb-modules/iweb-isabela</li>
                                <li>Bundle with Gerbil so everyone gets the library on their laptops.</li>
                                <li>Product Magento templates.</li>
                                <li>WordPress theme?</li>
                            </ul>
                        
                        </div>
                    </div>
                    
                <?php } else {

                    if(file_exists("templates" . $_SERVER['REQUEST_URI'] . ".php")) {
                        echo getBlock($_SERVER['REQUEST_URI']);
                    }

                }?>

                
            </div>

        </main>

        <footer class="footer site-footer">
            

            
            
            <div class="container">
                
                <h4>Related Patterns</h4>
                <nav class="nav--stack">
                    <ul>
                        <li><a href="#">Related Pattern 1</a></li>
                        <li><a href="#">Related Pattern 2</a></li>
                        <li><a href="#">Related Pattern 3</a></li>
                    </ul>
                </nav>
                
                <ul class="links">
                    <li><a href="/">Get Chopping</a></li>
                    <li><a href="/credits">Credit</a></li>
                    <li><a href="https://gitlab.iweb.co.uk/frontend/chopchop"><img src="https://gitlab.iweb.co.uk/favicon.ico" width="16" height="16" class="img-inline" style="vertical-align: text-top;"> Project on Gitlab</a></li>
                </ul>
                <small>&copy; <?php echo date("Y"); ?> <a href="/overview/credits">Chop Chop</a> is part of the <b><a href="http://www.iwebsolutions.co.uk/">Crack On Group</a></b>&trade; Cracking On Since 1995.</small>
            </div>
        </footer>

    </div><!--/#wrapper -->

    <?php include('inc/scripts.php'); ?>

</body>
</html>
