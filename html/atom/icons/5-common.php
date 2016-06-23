<?php /*
Title: Common Icons
*/ ?>

<ul class="u-list-unstyled u-list-inline">

    <?php
        $icons = array(
            'search',
            'checkmark',
            'cross',
            'plus',
            'minus',
            'user',
            'info',
            'question',
            'heart',
            'cloud',
            'basket',
            'bubble',
            'bubbles',
            'pencil',
            'star',
            'arrow-down',
            'arrow-up',
            'arrow-left',
            'arrow-right',
            'menu',
            'cog',
            'home',
            'phone',
            'envelop',
            'lock',
            'notification',
            'radio-unchecked',
            'radio-checked',
            'list',
            'grid',
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
