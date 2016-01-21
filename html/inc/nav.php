<?php
foreach($toplevels as $toplevel) {
?>
<nav class=" nav-<?= $toplevel ?> nav-collapse">
    <ul class="nav nav--stacked">
        <li class="level0 parent">
            <a href="<?= $toplevel ?>"
                id="<?= ucwords($toplevel) ?>-title"
                data-cc-group="cc-nav-title"
                data-cc-action="activate"
                data-cc-target="<?= ucwords($toplevel) ?>-content">
                <?= ucwords($toplevel) ?> <span class="shape-hook"></span>
            </a>
            <ul class="nav nav--pills child"
                id="<?= ucwords($toplevel) ?>-content"
                data-cc-group="cc-nav-content"
                data-cc-cascade-activate="<?= ucwords($toplevel) ?>-title">
                <?php
                $quarks = dir(dirname(__DIR__) . '/' . $toplevel);
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
        </li>
    </ul>
</nav>
<?php } ?>
