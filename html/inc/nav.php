<nav class=" nav-<?= $toplevel ?> nav-collapse">
    <ol>
        <?php
        foreach($toplevels as $toplevel) {
        ?>
            <li>
                <a href="<?= $toplevel ?>">
                    <?= ucwords($toplevel) ?>
                </a>
                <ol                id="<?= ucwords($toplevel) ?>-content">
                    <?php
                    $quarks = dir(dirname(__DIR__) . '/' . $toplevel);
                    while (false !== ($entry = $quarks->read())) {
                        if(substr($entry, -4) == '.php') {
                            $entry = substr($entry, 0, strlen($entry) - 4);
                        }
                        if(substr($entry, 0, 1) == '.') {
                             continue;
                        }
                    ?>
                    <li class="level1"><a href="<?php echo getUrl('html/' . $toplevel); ?>/<?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
                    <?php } ?>
                </ol>
            </li>
        <?php } ?>
    </ol>
</nav>
