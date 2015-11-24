<?php
foreach($toplevels as $toplevel) {
?>
<nav class=" nav-<?= $toplevel ?> nav-collapse">
    <ul class="nav nav--pills">
        <li class="level0 parent">
            <a href="<?= $toplevel ?>"
                id="<?= ucwords($toplevel) ?>-title"
                data-group="cc-nav-title"
                data-action="activate"
                data-target="<?= ucwords($toplevel) ?>-content">
                <?= ucwords($toplevel) ?> <span class="shape-hook"></span>
            </a>
            <ul class="nav nav--pills child"
                id="<?= ucwords($toplevel) ?>-content"
                data-group="cc-nav-content"
                data-cascade-activate="<?= ucwords($toplevel) ?>-title">
                <?php
                $quarks = dir($toplevel);
                while (false !== ($entry = $quarks->read())) {
                    if(substr($entry, -4) == '.php') {
                        $entry = substr($entry, 0, strlen($entry) - 4);
                ?>
                <li class="level1"><a href="<?php echo getUrl($toplevel); ?>/<?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
                <?php }} ?>
            </ul>
        </li>
    </ul>
</nav>
<?php } ?>
