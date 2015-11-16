<?php
foreach($toplevels as $toplevel) {
?>
<nav class=" nav-<?= $toplevel ?> nav-collapse">
    <ul class="nav nav--pills">
        <li class="level0 parent"><a href="<?= $toplevel ?>" data-toggle-action="toggle" data-toggle="<?= ucwords($toplevel) ?>"><?= ucwords($toplevel) ?> <span class="shape-hook"></span></a>
            <ul class="nav nav--pills child" data-toggle-id="<?= ucwords($toplevel) ?>">
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
