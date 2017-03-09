<?php /*
Title: Product Item
Class: .product-item
*/ ?>

<?php $offer = rand(0,2); ?>

<div class="product-item<?php if($offer < 1) { echo ' has-tag'; } ?>">

    <div class="product-item__image">
        <?php printPattern('component/layer/base'); ?>
    </div>

    <div class="product-item__body">
        <div><a href="#"><?php printData('title'); ?></a></div>
        <?php if(rand(0,3) > 1) : ?>
            <?php printPattern('component/rating/stars'); ?>
        <?php endif; ?>
    </div>

    <div class="product-item__footer">
        <?php $price = getData('price'); ?>
        <p>
            Free UK Delivery<br />
            <s><span class="u-visually-hidden">Was</span> &pound;<?php echo number_format($price * 0.8, 2); ?></s>
            <strong class="lead u-text-contextual-error"><span class="u-visually-hidden">Now</span> &pound;<?php echo number_format($price, 2); ?></strong>
        </p>
        <a href="#" class="btn btn--green btn--block" data-cc-toggle-action="activate" data-cc-toggle-target="#modal-add-to-basket">Add to basket</a>
    </div>

    <?php if($offer < 1) : ?>
        <?php printPattern('component/tag/base'); ?>
    <?php endif; ?>

</div>
