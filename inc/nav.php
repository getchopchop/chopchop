<?php
foreach(array('overview', 'atoms', 'molecules', 'organisms', 'grid', 'layout', 'helpers') as $toplevel) {
?>

<ul class="stacked-nav">
    <li><a href="/<?= $toplevel ?>" class="h5"><?= ucwords($toplevel) ?></a></li>
    <?php
    $quarks = dir('templates/' . $toplevel);
    while (false !== ($entry = $quarks->read())) {
        if(substr($entry, -4) == '.php') {
            $entry = substr($entry, 0, strlen($entry) - 4);
    ?>
    <li><a href="/<?= $toplevel ?>/<?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
    <?php }} ?>
</ul>
<?php } ?>