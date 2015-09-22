<?php
foreach(array('overview', 'atoms', 'molecules', 'organisms', 'layout', 'mixins', 'utilities') as $toplevel) {
?>
<nav class="nav--stack nav-<?= $toplevel ?> nav-collapse">
    <ul>
        <li class="level0 parent"><a href="/<?= $toplevel ?>"><?= ucwords($toplevel) ?><i class="icon-plus"></i> <i class="icon-minus"></i></a>
            <ul class="child">
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

<nav class="nav--stack nav-credits">
    <ul>
        <li class="level0 parent"><a href="/credits">Credits</a></li>
    </ul>
</nav>
