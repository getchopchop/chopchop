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
        <h2>Basic toggle example</h2>

        <h3 data-toggle-action="toggle" data-toggle-action="toggle" data-toggle-target="content-box">A target title</h3>
        <div data-toggle-id="content-box">This is some content that is toggled.</div>
    </div>

    <section>
        <h2>Accordion</h2>

        <div class="accordion">
            <div class="is-active accordion__header"
                data-toggle-id="tabs1-tab1"
                data-toggle-group="tabs1"
                data-toggle-action="activate"
                data-toggle-target="tabs1-content1">
                <h3>Tab 1</h3>
            </div>
            <div class="is-active accordion__body" i
                data-toggle-id="tabs1-content1"
                data-toggle-group="tabs1-content"
                data-toggle="tabs1-tab1">
                <p>tab 1 content</p>
            </div>
            <div class="is-inactive accordion__header"
                data-toggle-id="tabs1-tab2"
                data-toggle-group="tabs1"
                data-toggle-action="activate"
                data-toggle-target="tabs1-content2">
                <h3>Tab 2</h3>
            </div>
            <div class="is-inactive accordion__body"
                data-toggle-id="tabs1-content2"
                data-toggle-group="tabs1-content"
                data-toggle="tabs1-tab2">
                <p>tab 2 content</p>
            </div>
            <div class="is-inactive accordion__header"
                data-toggle-id="tabs1-tab3"
                data-toggle-group="tabs1"
                data-toggle-action="activate"
                data-toggle-target="tabs1-content3">
                <h3>Tab 3</h3>
            </div>
            <div class="is-inactive accordion__body"
                data-toggle-id="tabs1-content3"
                data-toggle-group="tabs1-content"
                data-toggle="tabs1-tab3">
                <p>tab 3 content</p>
            </div>
            <div class="is-inactive accordion__header"
                data-toggle-id="tabs1-tab4"
                data-toggle-group="tabs1"
                data-toggle-action="activate"
                data-toggle-target="tabs1-content4">
                <h3>Tab 4</h3>
            </div>
            <div class="is-inactive accordion__body"
                data-toggle-id="tabs1-content4"
                data-toggle-group="tabs1-content"
                data-toggle="tabs1-tab4">
                <p>tab 4 content</p>
            </div>
        </div>
    </section>

    <hr />

    <section>
        <h2>Accordion that can be collapsed or one open at a time</h2>

        <div class="accordion">
            <div class="accordion__header"
                data-toggle-id="tabs2-tab1"
                data-toggle-group="tabs2"
                data-toggle-action="toggle"
                data-toggle-target="tabs2-content1">
                <h3>Tab 1</h3>
            </div>
            <div class="accordion__body"
                data-toggle-id="tabs2-content1"
                data-toggle-group="tabs2-content"
                data-toggle="tabs2-tab1">
                <p>tab 1 content</p>
            </div>
            <div class="accordion__header"
                data-toggle-id="tabs2-tab2"
                data-toggle-group="tabs2"
                data-toggle-action="toggle"
                data-toggle-target="tabs2-content2">
                <h3>Tab 2</h3>
            </div>
            <div class="accordion__body"
                data-toggle-id="tabs2-content2"
                data-toggle-group="tabs2-content"
                data-toggle="tabs2-tab2">
                <p>tab 2 content</p>
            </div>
            <div class="accordion__header"
                data-toggle-id="tabs2-tab3"
                data-toggle-group="tabs2"
                data-toggle-action="toggle"
                data-toggle-target="tabs2-content3">
                <h3>Tab 3</h3>
            </div>
            <div class="accordion__body"
                data-toggle-id="tabs2-content3"
                data-toggle-group="tabs2-content"
                data-toggle="tabs2-tab3">
                <p>tab 3 content</p>
            </div>
            <div class="accordion__header"
                data-toggle-id="tabs2-tab4"
                data-toggle-group="tabs2"
                data-toggle-action="toggle"
                data-toggle-target="tabs2-content4">
                <h3>Tab 4</h3>
            </div>
            <div class="accordion__body"
                data-toggle-id="tabs2-content4"
                data-toggle-group="tabs2-content"
                data-toggle="tabs2-tab4">
                <p>tab 4 content</p>
            </div>
        </div>
    </section>

    <hr />

    <section>
        <h2>Accordion that can have multiple open at once</h2>

        <div class="accordion">
            <div class="is-active accordion__header"
                data-toggle-id="tabs3-tab1"
                data-toggle-action="toggle"
                data-toggle-target="tabs3-content1">
                <h3>Tab 1</h3>
            </div>
            <div class="is-active accordion__body"
                data-toggle-id="tabs3-content1"
                data-toggle="tabs3-tab1">
                <p>tab 1 content</p>
            </div>
            <div class="accordion__header"
                data-toggle-id="tabs3-tab2"
                data-toggle-action="toggle"
                data-toggle-target="tabs3-content2">
                <h3>Tab 2</h3>
            </div>
            <div class="accordion__body"
                data-toggle-id="tabs3-content2"
                data-toggle="tabs3-tab2">
                <p>tab 2 content</p>
            </div>
            <div class="is-active accordion__header"
                data-toggle-id="tabs3-tab3"
                data-toggle-action="toggle"
                data-toggle-target="tabs3-content3">
                <h3>Tab 3</h3>
            </div>
            <div class="is-active accordion__body"
                data-toggle-id="tabs3-content3"
                data-toggle="tabs3-tab3">
                <p>tab 3 content</p>
            </div>
            <div class="accordion__header"
                data-toggle-id="tabs3-tab4"
                data-toggle-action="toggle"
                data-toggle-target="tabs3-content4">
                <h3>Tab 4</h3>
            </div>
            <div class="accordion__body"
                data-toggle-id="tabs3-content4"
                data-toggle="tabs3-tab4">
                <p>tab 4 content</p>
            </div>
        </div>
    </section>

    <hr />

    <section>
        <h2>Tabs</h2>

        <div class="tabs">
            <div class="is-active tabs__header"
                data-toggle-id="tabs4-tab1"
                data-toggle-group="tabs4"
                data-toggle-action="activate"
                data-toggle-target="tabs4-content1">
                <h3>Tab 1</h3>
            </div>
            <div class="is-active tabs__body"
                data-toggle-id="tabs4-content1"
                data-toggle-group="tabs4-content"
                data-toggle-activate="tabs4-tab1">
                <p>tab 1 content</p>
            </div>
            <div class="tabs__header"
                data-toggle-id="tabs4-tab2"
                data-toggle-group="tabs4"
                data-toggle-action="activate"
                data-toggle-target="tabs4-content2">
                <h3>Tab 2</h3>
            </div>
            <div class="tabs__body"
                data-toggle-id="tabs4-content2"
                data-toggle-group="tabs4-content"
                data-toggle-activate="tabs4-tab2">
                <p>tab 2 content</p>
            </div>
            <div class="tabs__header"
                data-toggle-id="tabs4-tab3"
                data-toggle-group="tabs4"
                data-toggle-action="activate"
                data-toggle-target="tabs4-content3">
                <h3>Tab 3</h3>
            </div>
            <div class="tabs__body"
                data-toggle-id="tabs4-content3"
                data-toggle-group="tabs4-content"
                data-toggle-activate="tabs4-tab3">
                <p>tab 3 content</p>
            </div>
            <div class="tabs__header"
                data-toggle-id="tabs4-tab4"
                data-toggle-group="tabs4"
                data-toggle-action="activate"
                data-toggle-target="tabs4-content4">
                <h3>Tab 4</h3>
            </div>
            <div class="tabs__body"
                data-toggle-id="tabs4-content4"
                data-toggle-group="tabs4-content"
                data-toggle-activate="tabs4-tab4">
                <p>tab 4 content</p>
            </div>
        </div>
    </section>

    <hr />

    <section>
        <h2>Modal</h2>
        <p>
            <a href="#"
                data-toggle-action="activate"
                data-toggle-target="modal">
                    Click me for modal time
            </a>
        </p>
    </section>
    </section>

    <hr />

    <section>
        <h2>Drawers</h2>
        <p><a href="#" data-toggle-action="activate" data-toggle-target="drawer-left">Left drawer</a></p>
        <p><a href="#" data-toggle-action="activate" data-toggle-target="drawer-right">Right drawer</a></p>
    </section>


    </div><!--/#wrapper -->


    <div class="overlay" 
        data-toggle-id="overlay"
        data-toggle-action="deactivate" 
        data-toggle-target="overlay"
        data-toggle-deactivate="drawer-left,drawer-right,modal"></div> <!-- toggle is-active to show !-->

    <!-- toggle is-active to show !-->
    <div class="drawer drawer--left" data-toggle-id="drawer-left" data-toggle-group="drawers" data-toggle-activate="overlay">
        <div class="drawer__dialog">
            <div class="card">
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
    </div>

    <!-- toggle class is-active to show !-->
    <div class="drawer drawer--right" data-toggle-id="drawer-right" data-toggle-group="drawers" data-toggle-activate="overlay">
        <div class="drawer__dialog">
            <div class="card">
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
    </div>

    <!-- toggle is-active to show !-->
    <div class="modal" data-toggle-id="modal" data-toggle-activate="overlay">
        <div class="modal__dialog">
            <div class="card">
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
        </div>
        <a href="#" class="btn modal__close" data-toggle-action="deactivate" data-toggle-target="overlay">Close</a>
    </div>

    <?php include('../inc/scripts.php'); ?>

</body>
</html>
