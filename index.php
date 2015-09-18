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
            
            <?php if($_SERVER['REQUEST_URI'] != '/') { ?>
                <?php
                    $wrapped = array_map(
                       function ($el) {
                          return "<a href='#'>{$el}</a>";
                       },
                       $paths
                    );
                ?>
            <header class="site-masthead theme-atom">
                <hgroup class="hgroup">
                    <span class="breadcrumbs"><?php echo "&larr;&nbsp;", implode($wrapped, "&nbsp;&larr;&nbsp;"); ?></span>
                    <h1 class="hgroup__title"><?php echo array_pop($paths);?></h1>
                </hgroup>
            </header>
            <?php } else { ?>
            <header class="site-masthead">
                <a href="/" class="logo">
                    <hgroup class="hgroup">
                      <h1 class="hgroup__title">Get Chopping</h1>
                      <h5 class="hgroup__subtitle">Everything you need for the perfect slice.</h5>
                    </hgroup>
                </a>
            </header>
            <?php } ?>

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
                
                <nav>
                    <ul class="links">
                        <li><a href="/">Get Chopping</a></li>
                        <li><a href="/credits">Credit</a></li>
                        <li><a href="https://gitlab.iweb.co.uk/frontend/chopchop"><img src="https://gitlab.iweb.co.uk/favicon.ico" width="16" height="16" class="img-inline" style="vertical-align: text-top;"> Project on Gitlab</a></li>
                    </ul>
                    
                    <a href="https://www.iwebsolutions.co.uk" class="iweb-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="585.1" height="394.6" viewBox="-1.8 223.3 585.1 394.6">
                            <path d="M101.5 506.5l12.7-59.5-23-108c-3.6-17-20.4-30.8-37.4-30.8H-1.8l42.2 198.4c3.1 14.7 15.8 30.1 30.5 30.1s27.4-15.5 30.6-30.2z"/>
                            <path d="M216.8 306.7c-3.2-15.1-16.6-30.3-31.5-30.3s-28.3 15.2-31.5 30.3l-42.5 199.8c-3.6 17-20.4 30.8-37.4 30.8h102.7c17 0 33.8-13.8 37.4-30.8l22.6-106.3-19.8-93.5z"/>
                            <path d="M360.5 587.1l70.8-333c3.6-17 20.4-30.8 37.4-30.8h114.6l-85.5 363.8c-3.6 17-20.4 30.8-37.4 30.8H323.2c17 0 33.7-13.8 37.3-30.8z"/>
                            <path d="M347.4 587.1l34.8-163.7-24.8-116.8c-3.6-17-20.4-30.8-37.4-30.8H191c17 0 33.8 13.8 37.4 30.8L288 587c3.1 14.4 15.7 29.9 29.7 29.9 14.1.1 26.6-15.3 29.7-29.8z"/>
                        </svg>
                    </a>
                    
                    <small>&copy; <?php echo date("Y"); ?> <a href="/overview/credits">Chop Chop</a> is part of the <b><a href="http://www.iwebsolutions.co.uk/">Crack On Group</a></b>&trade; Cracking On Since 1995.</small>
                </nav>
            </div>
        </footer>

    </div><!--/#wrapper -->

    <?php include('inc/scripts.php'); ?>

</body>
</html>
