<nav>
    <ul class="nav nav--pills">
        <li class="level0 parent"><a href="#" class="js-kill-nav">Remove Nav <i class="icon-cancel"></i></a></li>
    </ul>
</nav>

<?php
foreach(array('branding', 'atoms', 'molecules', 'layout') as $toplevel) {
?>
<nav class=" nav-<?= $toplevel ?> nav-collapse">
    <ul class="nav nav--pills">
        <li class="level0 parent"><a href="/<?= $toplevel ?>"><?= ucwords($toplevel) ?><i class="icon-plus"></i> <i class="icon-minus"></i></a>
            <ul class="nav nav--pills child">
                <?php
                $quarks = dir('templates/' . $toplevel);
                while (false !== ($entry = $quarks->read())) {
                    if(substr($entry, -4) == '.php') {
                        $entry = substr($entry, 0, strlen($entry) - 4);
                ?>
                <li class="level1"><a href="/<?= $toplevel ?>/<?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
                <?php }} ?>
            </ul>
        </li>
    </ul>
</nav>
<?php } ?>