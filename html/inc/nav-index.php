<div class="g-six-up g-gutter g-margin">
    <?php
    foreach($toplevels as $toplevel) {
    ?>
    <div class="nav-<?= $toplevel ?>">
        <p class="cc-heading"><?= ucwords($toplevel) ?></p>
        <ul class="nav nav--pills child">
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
    <?php } ?>
</div>
