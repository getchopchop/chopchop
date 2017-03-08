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
        'arrow-down6',
        'arrow-up6',
        'arrow-left6',
        'arrow-right6',
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
        'link',
        'table2',
    );
?>
<ul class="nav nav--inline nav--space">
    <?php foreach($icons as $icon) : ?><li><?php printSvg('general', $icon); ?></li><?php endforeach; ?>
</ul>
