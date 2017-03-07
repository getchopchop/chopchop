<?php
    $icons = array(
        'AmericanExpress-light',
        'Cirrus-card-light',
        'DinersClub-card-light',
        'Discover-card-light',
        'JCB-card-light',
        'Maestro-card-light',
        'MasterCard-light',
        'UnionPay-card-light',
        'Visa-card-light'
    );
?>
<ul class="u-list-unstyled u-list-inline u-list-space">
    <?php foreach($icons as $icon) : ?><li><?php printSvg('card', $icon, 'icon--card'); ?></li><?php endforeach; ?>
</ul>
