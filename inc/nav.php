<nav>
    <ol>
        <?php
        foreach($toplevels as $toplevel) {
        ?>
            <li>
                <a href="/pattern/<?= $toplevel ?>/"><?= ucwords($toplevel) ?></a>
                <ol>
                    <?php
                    $quarks = dir(dirname(__DIR__) . '/pattern/' . $toplevel);
                    while (false !== ($entry = $quarks->read())) {
                        if(substr($entry, -4) == '.php') {
                            $entry = substr($entry, 0, strlen($entry) - 4);
                        }
                        if(substr($entry, 0, 1) == '.') {
                             continue;
                        }
                    ?>
                    <li class="level1"><a href="/pattern/<?php echo $toplevel; ?>/<?php if($toplevel != 'template') : ?>#section-<?php endif; ?><?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
                    <?php } ?>
                </ol>
            </li>
        <?php } ?>
    </ol>
</nav>
