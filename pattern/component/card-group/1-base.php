<?php /*
Title: Card group
Class: .card-group
Description: Stacks cards by removing borders
*/ ?>

<div class="card-group">
    <div class="card">
        <div class="card__body">
            <?php $price = getData('price'); ?>
            <p>
                <strong class="h2 u-text-contextual-error">
                    <span class="u-visually-hidden">Now</span> &pound;<?php echo number_format($price * 0.8, 2); ?>
                </strong>
                <span class="lead"> delivered</span><br />
                Was <s>&pound;<?php echo number_format($price, 2); ?></s><br />
                You save &pound;<?php echo number_format($price * 0.2, 2); ?><br />
            </p>
            <p><strong class="u-text-contextual-success"><?php printSvg('general', 'checkmark'); ?> In Stock</strong></p>
            <ul class="u-list-unstyled u-space-lg-bottom">
                <li>3+ for £10.88 each</li>
                <li>5+ for £10.66 each</li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card__body">
            <label for="text" class="field-group__label">Qty:</label>
            <form action="" class="u-space-bottom grid g-gutter-x g-center-y g-stretch-first">
                <div>
                    <div class="field-group">
                        <div class="field-group__field">
                            <input id="text" type="number" placeholder="Qty" value="1" class="lead">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn--lg">Add to basket</button>
                </div>
            </form>
            <p><strong class="lead u-text-contextual-success">Free delivery.<br />Dispatched within 24 hours</strong></p>
        </div>
    </div>
</div>
