<?php /*
Title: Common Icons
*/ ?>

<ul class="u-list-unstyled u-list-inline">

    <?php
        $icons = array(
            'search3',
            'checkmark',
            'cross',
            'plus',
            'minus',
            'user',
            'info',
            'question',
            'heart',
            'cloud',
            'cart',
            'bubble',
            'bubbles',
            'pencil',
            'star-full',
            'circle-down',
            'circle-up',
            'circle-left',
            'circle-right',
            'menu',
            'cog',
            'home',
            'phone2',
            'envelop',
            'lock4',
            'notification',
            'radio-unchecked',
            'radio-checked',
            'list',
            'table2',
        );

        foreach($icons as $icon) :
    ?>
        <li>
            <?php printSvg('general--' . $icon); ?>
        </li>
    <?php
        endforeach;
    ?>
</ul>
