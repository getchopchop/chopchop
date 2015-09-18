<?php
foreach(array('overview', 'atoms', 'molecules', 'organisms', 'grid', 'mixins', 'utilities', 'credits') as $toplevel) {
?>
<nav class="nav--stack nav-<?= $toplevel ?>">
    <ul>
        <li><a href="/<?= $toplevel ?>"><?= ucwords($toplevel) ?></a></li>
        <?php
        $quarks = dir('templates/' . $toplevel);
        while (false !== ($entry = $quarks->read())) {
            if(substr($entry, -4) == '.php') {
                $entry = substr($entry, 0, strlen($entry) - 4);
        ?>
        <li><a href="/<?= $toplevel ?>/<?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
        <?php }} ?>
    </ul>
</nav>
<?php } ?>