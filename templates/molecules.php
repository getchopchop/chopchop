<div class="well">
    <div class="container">
        <h2>Molecules</h2>
        <p>Molecules are groups of elements that function together as a unit. For example, a form label, search input, and button atom can combine them together to form a search form molecule.</p>
        <p>Building up from atoms to molecules encourages a &ldquo;do one thing and do it well&rdquo; mentality, and encourages creating reusable interface patterns.</p>

        <?php
        foreach(array('molecules') as $toplevel) {
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
</div>