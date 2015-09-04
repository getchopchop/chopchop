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
        
        
        <header class="site-banner">
            <a href="/" class="logo">
                <span class="logo__circle"><img src="/src/img/noun_35441_cc.svg" class="logo__img" /></span>
                <span class="logo__text h6"><span>Chop</span><span>Chop</span></span>
            </a>
        </header>
        
        <nav class="site-navigation">
            <a href="" class="site-navigation__toggle block-toggle">Show Navigation</a>
            <div class="block-content site-navigation__content">
                <?php include('inc/nav.php'); ?>
                <ul>
                    <li>
                        <a href="/">Getting Started</a>
                        <ul>
                            <li><a href="/getting-started/structure">Structure</a></li>
                            <li><a href="/getting-started/credits">Credits</a></li>
                        </ul>
                    </li>
                </ul>
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
                          <h1 class="hgroup__title">
                              <span class="logo__circle">
                                  <img src="/src/img/noun_35441_cc.svg" class="logo__img" />
                              </span>
                          
                              <span style="display: inline-block; vertical-align: bottom;">Chop Chop</span>
                          </h1>
                          <h5 class="hgroup__subtitle">a simple library of common reuseable patterns we use everyday!</h5>
                        </hgroup>
                    </a>
                <?php } ?>
            
            </header>
            
            <div class="site-content">
            
                <?php if($_SERVER['REQUEST_URI'] == '/') { ?>
                    
                <div class="container">
                    <h2>Components</h2>
                    <div class="g-three-up g-gutter">
                        <?php include('inc/nav.php'); ?>
                    </div>

                        <hr />

                        <h2>Getting Started</h2>
                        <p class="lead">This is the lead.</p>

                        <h2>Documentation to write</h2>
                        <ul>
                            <li>https://www.daveredfern.com/2015/08/npm-and-bower-when-to-use-each/</li>
                            <li>Notes on Gulp, why? Available commands.</li>
                            <li>NPM, manages packages including gulp</li>
                            <li>Bower, manages production ready packages</li>
                            <li>Browser Support, why?</li>
                            <li>Notes on Gulp, why? Available commands.</li>
                            <li>http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/</li>
                            <li>Notes on BEM, why?</li>
                            <li>Integration w/Isabela: https://gitlab.iweb.co.uk/iweb/isabela</li>
                        </ul>

                        <h3>Why Chop Chop?</h3>

                        <p>With responsive web design being the norm, we find ourselves fighting against our old processes. The traditional Wireframe > Design > Chop > Build > Go Live process isn&rsquo;t working, we need to move away from this flow and we need something to help us do that.</p>

                        <p>We need a common design system that we all use and contribute to across all projects irrespective of platform used. If we all use this system and contribute to it, over time it will grow and be refined. A lot of the design work (particularly layout based) can be done by throwing elements together in the browser and seeing how they react to varying screen sizes. Instead of designing complete layouts we should ask ourselves questions like,</p>

                        <ul>
                            <li>What do my headings look like?</li>
                            <li>What does a button look like?</li>
                            <li>How many button variants do we need?</li>
                        </ul>

                        <p>Asking these question and designing the elements that make up the website is a much more effective way of producing a better end result.</p>

                        <p>We often find ourselves initially stuck when starting a new project. Questions are asked:</p>

                        <blockquote>&quot;So what is the thing we are using for this project?&quot;</blockquote>

                        <p>We should be able to get going on a project irrespective of platform used or hosting setup. Front-end should be just that, we shouldn&rsquo;t need to install Magento or WordPress in order to start a project. Moving the front-end experience away from the platform lowers the barrier to entry but this doesn&rsquo;t mean we should ignore the platforms entirely.</p>

                        <h3>The aims of Chop Chop</h3>

                        <p>Create a coherent frontend language that is platform agnostic Provide a starting point for any project Cut down the amount of repetitive work</p>

                        <h3>What Chop Chop is</h3>

                        <p>Chop Chop is a simple library of common reusable patterns we use across all projects everyday. the patterns are made up of HTML/CSS, (SCSS) and JavaScript.</p>

                        <h3>What Chop Chop is not</h3>

                        <p>A complete framework. We wanted to keep Chop Chop small.</p>

                        <h3>The Roadmap</h3>
                        <ul>
                            <li>Automate Functional Testing?</li>
                            <li>Bundle with Gerbil so everyone gets the library on their laptops.</li>
                            <li>Product Magento templates.</li>
                            <li>WordPress theme?</li>
                        </ul>
                        
                    </div>

                <?php } else {

                    if(file_exists("templates" . $_SERVER['REQUEST_URI'] . ".php")) {
                        if(count($paths)){
                            echo getBlock($_SERVER['REQUEST_URI']);
                        }
                    }

                }?>

                
            </div>

        </main>

        <footer class="footer site-footer">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Chop Chop</a></li>
                    <li><a href="/getting-started/credits">Credit</a></li>
                    <li><a href="https://gitlab.iweb.co.uk/frontend/Chop Chop"><img src="https://gitlab.iweb.co.uk/favicon.ico" width="16" height="16" class="img-inline" style="vertical-align: text-top;"> Project on Gitlab</a></li>
                </ul>
                <small>&copy; <a href="/getting-started/credits">Chop Chop</a> is part of the <b>Crack On Group</b>&trade; <?php echo date("Y"); ?>.</small>
            </div>
        </footer>

    </div><!--/#wrapper -->

    <?php include('inc/scripts.php'); ?>

</body>
</html>
