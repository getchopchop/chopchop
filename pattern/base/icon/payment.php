<?php
    $icons = array(
        'Amazon-card-light',
        'Apple-card-light',
        'DirectDebit-card-light',
        'Paypal-card-light',
        'Sage-card-light',
        'Stripe-card-light',
        'WorldPay-card-light',
        
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
<p><code>.icon--card</code></p>
<ul class="u-list-unstyled u-list-inline u-list-space">
    <?php foreach($icons as $icon) : ?><li><?php printSvg('payment', $icon, 'icon--card'); ?></li><?php endforeach; ?>
</ul>
