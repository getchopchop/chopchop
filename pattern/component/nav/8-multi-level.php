<?php /*
Title: Multi Level
Class: .nav.nav--multi-level
*/ ?>

<ul class="nav nav--inline nav--space nav--multi-level">
    <li>
        <a href="#">Top Level with sub</a>
        <ul>
            <?php for($i=0; $i <=6; $i++) { ?><li>
                <a href="#">Sub Level with sub</a>
                <ul>
                    <?php for($i=0; $i <=6; $i++) { ?><li><a href="#">Sub Level</a></li><?php } ?>
                </ul>
            </li><?php } ?>
        </ul>
    </li>
    <?php for($i=0; $i <=6; $i++) { ?><li><a href="#">Top Level</a></li><?php } ?>
</ul>