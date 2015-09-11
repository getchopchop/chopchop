<div class="container">
    <h2>Atoms?! What are atoms?</h2>
    <p>Atoms are basic tags, such as form labels, inputs or buttons. They also include more abstract elements like color palettes, fonts, and animations.</p>
    <p>Atoms are abstract and aren't often terribly useful on their own, but they provide a useful reference and allow you to see all your global styles laid out at a glance.</p>

    <?php
    foreach(array('atoms') as $toplevel) {
    ?>
    <nav class="nav--stack">
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
    </nav>
    <?php } ?>

</div>
