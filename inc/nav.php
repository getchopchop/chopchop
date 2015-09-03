<?php
foreach(array('atoms', 'molecules', 'organisms', 'grid', 'layout', 'helpers') as $toplevel) {
?>
<div>
    <h3><?= ucwords($toplevel) ?></h3>
    <ul>
        <?php
        $quarks = dir('templates/' . $toplevel);
        while (false !== ($entry = $quarks->read())) {
            if(substr($entry, -4) == '.php') {
                $entry = substr($entry, 0, strlen($entry) - 4);
        ?>
        <li><a href="/<?= $toplevel ?>/<?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
        <?php }} ?>
    </ul>
</div>
<?php } ?>