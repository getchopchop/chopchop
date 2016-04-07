<div class="cc-index-nav">
    <?php
    foreach($toplevels as $toplevel) {
    ?>
    <?php if($toplevel == 'atom') { echo '</div><div class="cc-index-nav">'; } ?>
    <div>
        <div class="card card--bordered nav-<?= $toplevel ?> cc-index-nav__item">
            <div class="card__header cc-index-nav__header has-plus-minus" data-cc-action="toggle" data-cc-target="toggle-<?= $toplevel ?>" id="toggle-title-<?= $toplevel ?>" data-cc-group="toggle-titles">
                <h4><?= ucwords($toplevel) ?></h4>
                <span class="shape"></span>
            </div>
            <div class="card__body cc-index-nav__body u-toggle" id="toggle-<?= $toplevel ?>" data-cc-cascade="toggle-title-<?= $toplevel ?>" data-cc-group="toggle-contents">
                <ul class="nav nav--space child">
                    <?php
                    $quarks = dir($toplevel);
                    while (false !== ($entry = $quarks->read())) {
                        if(substr($entry, -4) == '.php') {
                            $entry = substr($entry, 0, strlen($entry) - 4);
                        }
        		        if(substr($entry, 0, 1) == '.') {
                             continue;
                        }
                    ?>
                    <li class="level1"><a href="<?php echo getUrl('html/' . $toplevel); ?>/<?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
