<?php require_once('../inc/functions.php'); ?>
<?php $paths = explode("/", substr($_SERVER['REQUEST_URI'], 1));?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('../inc/meta.php'); ?>
<title>Chop Chop - Little user interface patterns to get us going</title>
<?php include('../inc/favicons.php'); ?>
<?php include('../inc/styles.php'); ?>
</head>
<body>


    <section>
        <h2>Accordion</h2>

        <div class="accordion">
            <div class="accordion__header">
                <h3>Tab 1</h3>
            </div>
            <div class="is-active accordion__body">
                <p>tab 1 content</p>
            </div>
            <div class="accordion__header">
                <h3>Tab 2</h3>
            </div>
            <div class="accordion__body">
                <p>tab 2 content</p>
            </div>
            <div class="accordion__header">
                <h3>Tab 3</h3>
            </div>
            <div class="accordion__body">
                <p>tab 3 content</p>
            </div>
            <div class="accordion__header">
                <h3>Tab 4</h3>
            </div>
            <div class="accordion__body">
                <p>tab 4 content</p>
            </div>
        </div>
    </section>

    <hr />

    <section>
        <h2>Accordion that can be collapsed or one open at a time</h2>

        <div class="accordion">
            <div class="accordion__header">
                <h3>Tab 1</h3>
            </div>
            <div class="accordion__body">
                <p>tab 1 content</p>
            </div>
            <div class="accordion__header">
                <h3>Tab 2</h3>
            </div>
            <div class="accordion__body">
                <p>tab 2 content</p>
            </div>
            <div class="accordion__header">
                <h3>Tab 3</h3>
            </div>
            <div class="accordion__body">
                <p>tab 3 content</p>
            </div>
            <div class="accordion__header">
                <h3>Tab 4</h3>
            </div>
            <div class="accordion__body">
                <p>tab 4 content</p>
            </div>
        </div>
    </section>

    <hr />

    <section>
        <h2>Accordion that can have multiple open at once</h2>

        <div class="accordion">
            <div class="is-active accordion__header">
                <h3>Tab 1</h3>
            </div>
            <div class="is-active accordion__body">
                <p>tab 1 content</p>
            </div>
            <div class="accordion__header">
                <h3>Tab 2</h3>
            </div>
            <div class="accordion__body">
                <p>tab 2 content</p>
            </div>
            <div class="is-active accordion__header">
                <h3>Tab 3</h3>
            </div>
            <div class="is-active accordion__body">
                <p>tab 3 content</p>
            </div>
            <div class="accordion__header">
                <h3>Tab 4</h3>
            </div>
            <div class="accordion__body">
                <p>tab 4 content</p>
            </div>
        </div>
    </section>

    <hr />

    <section>
        <h2>Tabs</h2>

        <div class="tabs">
            <div class="is-active tabs__header">
                <h3>Tab 1</h3>
            </div>
            <div class="is-active tabs__body">
                <p>tab 1 content</p>
            </div>
            <div class="tabs__header">
                <h3>Tab 2</h3>
            </div>
            <div class="tabs__body">
                <p>tab 2 content</p>
            </div>
            <div class="tabs__header">
                <h3>Tab 3</h3>
            </div>
            <div class="tabs__body">
                <p>tab 3 content</p>
            </div>
            <div class="tabs__header">
                <h3>Tab 4</h3>
            </div>
            <div class="tabs__body">
                <p>tab 4 content</p>
            </div>
        </div>
    </section>

    <hr />

    <section>
        <h2>Modal</h2>
        <p><a href="#">Click me for modal time</a></p>
    </section>
    </section>

    <hr />

    <section>
        <h2>Drawers</h2>
        <p><a href="#">Left drawer</a></p>
        <p><a href="#">Right drawer</a></p>
    </section>


    </div><!--/#wrapper -->


    <div class="overlay"></div> <!-- toggle is-active to show !-->

    <div class="drawer drawer--left"> <!-- toggle is-active to show !-->
        <div class="drawer__dialog card">
            <div class="card__header">
                <h2>Left drawer</h2>
            </div>
            <div class="card__body">
                <p>Vestibulum varius sem vitae diam venenatis porttitor. Pellentesque nec quam eget eros tincidunt mattis non ac nunc. Vivamus tristique, turpis vitae efficitur laoreet, eros tellus lobortis nulla, ac auctor neque velit at risus. Sed volutpat dolor erat, placerat malesuada quam tempor eu. Morbi a tellus sit amet lectus tincidunt imperdiet a tincidunt est. Cras vel volutpat mauris. Sed consectetur felis vel maximus elementum. Proin sed nisl lectus. Nunc non est ac ipsum gravida commodo vel quis nunc.</p>
                <p>In convallis sem quis risus suscipit efficitur. Vivamus neque nisl, aliquam ac auctor nec, dignissim ac elit. Vivamus et enim augue. Cras mauris ex, pretium eget erat in, hendrerit tempus elit. Nam nisl tortor, vestibulum at arcu sit amet, posuere tincidunt enim. Nunc luctus sagittis sapien, quis tempor ligula mattis scelerisque. Quisque condimentum justo massa, vel egestas enim tempus et. Cras iaculis ex a velit molestie tempor. Aliquam aliquet faucibus rutrum. Aenean pharetra mattis imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque cursus risus non magna lobortis fermentum. Nulla accumsan nulla ac elit blandit, sed porta quam condimentum.</p>
                <p>Ut malesuada felis pulvinar nulla tempor tempus. Donec at quam scelerisque, egestas augue dignissim, gravida mi. Cras at pellentesque mi, quis tristique felis. In auctor vel mauris at tempus. Fusce fermentum vel mi sit amet faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer pretium, mauris et imperdiet pulvinar, velit elit rhoncus lacus, nec volutpat turpis elit non arcu. Curabitur vel lorem ac lacus consectetur consequat. Ut nulla justo, viverra nec urna et, pharetra varius orci. Aenean sit amet lorem nunc. Vivamus sagittis accumsan justo, id luctus leo facilisis eget. Aliquam bibendum erat commodo, consectetur erat non, varius neque.</p>
            </div>
            <div class="card__footer">
                <p>Some footer bits</p>
            </div>
        </div>
    </div>

    <div class="drawer drawer--right"> <!-- toggle class is-active to show !-->
        <div class="drawer__dialog card">
            <div class="card__header">
                <h2>Right drawer</h2>
            </div>
            <div class="card__body">
                <p>Vestibulum varius sem vitae diam venenatis porttitor. Pellentesque nec quam eget eros tincidunt mattis non ac nunc. Vivamus tristique, turpis vitae efficitur laoreet, eros tellus lobortis nulla, ac auctor neque velit at risus. Sed volutpat dolor erat, placerat malesuada quam tempor eu. Morbi a tellus sit amet lectus tincidunt imperdiet a tincidunt est. Cras vel volutpat mauris. Sed consectetur felis vel maximus elementum. Proin sed nisl lectus. Nunc non est ac ipsum gravida commodo vel quis nunc.</p>
                <p>In convallis sem quis risus suscipit efficitur. Vivamus neque nisl, aliquam ac auctor nec, dignissim ac elit. Vivamus et enim augue. Cras mauris ex, pretium eget erat in, hendrerit tempus elit. Nam nisl tortor, vestibulum at arcu sit amet, posuere tincidunt enim. Nunc luctus sagittis sapien, quis tempor ligula mattis scelerisque. Quisque condimentum justo massa, vel egestas enim tempus et. Cras iaculis ex a velit molestie tempor. Aliquam aliquet faucibus rutrum. Aenean pharetra mattis imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque cursus risus non magna lobortis fermentum. Nulla accumsan nulla ac elit blandit, sed porta quam condimentum.</p>
                <p>Ut malesuada felis pulvinar nulla tempor tempus. Donec at quam scelerisque, egestas augue dignissim, gravida mi. Cras at pellentesque mi, quis tristique felis. In auctor vel mauris at tempus. Fusce fermentum vel mi sit amet faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer pretium, mauris et imperdiet pulvinar, velit elit rhoncus lacus, nec volutpat turpis elit non arcu. Curabitur vel lorem ac lacus consectetur consequat. Ut nulla justo, viverra nec urna et, pharetra varius orci. Aenean sit amet lorem nunc. Vivamus sagittis accumsan justo, id luctus leo facilisis eget. Aliquam bibendum erat commodo, consectetur erat non, varius neque.</p>
            </div>
            <div class="card__footer">
                <p>Some footer bits</p>
            </div>
        </div>
    </div>

    <div class="modal"> <!-- toggle is-active to show !-->
        <div class="modal__dialog card">
            <div class="card__header">
                <h2>This is a modal</h2>
            </div>
            <div class="card__body">
                <p>Vestibulum varius sem vitae diam venenatis porttitor. Pellentesque nec quam eget eros tincidunt mattis non ac nunc. Vivamus tristique, turpis vitae efficitur laoreet, eros tellus lobortis nulla, ac auctor neque velit at risus. Sed volutpat dolor erat, placerat malesuada quam tempor eu. Morbi a tellus sit amet lectus tincidunt imperdiet a tincidunt est. Cras vel volutpat mauris. Sed consectetur felis vel maximus elementum. Proin sed nisl lectus. Nunc non est ac ipsum gravida commodo vel quis nunc.</p>
                <p>In convallis sem quis risus suscipit efficitur. Vivamus neque nisl, aliquam ac auctor nec, dignissim ac elit. Vivamus et enim augue. Cras mauris ex, pretium eget erat in, hendrerit tempus elit. Nam nisl tortor, vestibulum at arcu sit amet, posuere tincidunt enim. Nunc luctus sagittis sapien, quis tempor ligula mattis scelerisque. Quisque condimentum justo massa, vel egestas enim tempus et. Cras iaculis ex a velit molestie tempor. Aliquam aliquet faucibus rutrum. Aenean pharetra mattis imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque cursus risus non magna lobortis fermentum. Nulla accumsan nulla ac elit blandit, sed porta quam condimentum.</p>
                <p>Ut malesuada felis pulvinar nulla tempor tempus. Donec at quam scelerisque, egestas augue dignissim, gravida mi. Cras at pellentesque mi, quis tristique felis. In auctor vel mauris at tempus. Fusce fermentum vel mi sit amet faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer pretium, mauris et imperdiet pulvinar, velit elit rhoncus lacus, nec volutpat turpis elit non arcu. Curabitur vel lorem ac lacus consectetur consequat. Ut nulla justo, viverra nec urna et, pharetra varius orci. Aenean sit amet lorem nunc. Vivamus sagittis accumsan justo, id luctus leo facilisis eget. Aliquam bibendum erat commodo, consectetur erat non, varius neque.</p>
            </div>
            <div class="card__footer">
                <p>Some footer bits</p>
            </div>
        </div>
        <a href="#" class="btn modal__close">Close</a>
    </div>


    <?php include('../inc/scripts.php'); ?>

</body>
</html>
