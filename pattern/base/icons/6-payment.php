<?php /*
Title: Payment Icons
Section: u-fill-grey-lighter
*/ ?>

<?php
    $icons = array(
        'Amazon-card-light',
        'Apple-card-light',
        'DirectDebit-card-light',
        'Paypal-card-light',
        'Sage-card-light',
        'Stripe-card-light',
        'WorldPay-card-light'
    );
?>

<ul class="u-list-unstyled u-list-inline u-list-space">
    <?php foreach($icons as $icon) : ?><li><?php printSvg('payment', $icon, 'icon--card'); ?></li><?php endforeach; ?>
</ul>