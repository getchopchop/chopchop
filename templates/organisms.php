<div class="well">
    <div class="container">
        <h2>Organisms</h2>
        <p>Organisms can consist of similar and/or disparate molecule types. For example, a masthead organism might consist of a logo, navigation, and search form, while a &ldquo;product grid&rdquo; organism might consist of the same product info molecule repeated over and over.</p>
        <p>Building up from atoms to molecules to organisms encourages creating standalone, portable, reusable components.</p>

        <?php
        foreach(array('organisms') as $toplevel) {
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
