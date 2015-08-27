<?php require_once('inc/functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('inc/meta.php'); ?>
    <title>Primer - Little user interface patterns to get us going</title>
<?php include('templates/styles.php'); ?>
</head>
<body>

    <div id="primer-wrapper">

        <main class="main" id="primer-content-wrapper">

            <div class="container">
                
                <?php if($_SERVER['REQUEST_URI'] == '/') { ?>
                <hgroup class="hgroup">
                  <h1 class="hgroup__title">ChopChop</h1>
                  <h5 class="hgroup__subtitle">a simple library of common reuseable patterns we use everyday!</h5>
                </hgroup>

                <h2>Components</h2>
                <div class="g-three-up g-gutter">
                    <?php
                    foreach(array('atoms', 'molecules', 'organisms', 'grid', 'layout', 'helpers') as $toplevel) {
                    ?>
                    <div>
                        <h3><?= ucwords($toplevel) ?></h3>
                        <ul>
                            <?php
                            $quarks = dir('templates/' . $toplevel);
                            while (false !== ($entry = $quarks->read())) {
                                if(substr($entry, -4) == '.php') {
                                    $entry = substr($entry, 0, strlen($entry) - 4);
                            ?>
                            <li><a href="<?= $toplevel ?>/<?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
                            <?php }} ?>
                        </ul>
                    </div>
                    <?php } ?>
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

                <h3>Why Primer?</h3>

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


                <?php } else {

                    if(file_exists("templates" . $_SERVER['REQUEST_URI'] . ".php")) {
                        echo getBlock(str_replace("/", " &gt; ",substr($_SERVER['REQUEST_URI'], 1)), $_SERVER['REQUEST_URI']);
                    }

                }?>

            </div>


        </main>

    </div><!--/#wrapper -->

    <?php include('templates/scripts.php'); ?>

</body>
</html>
