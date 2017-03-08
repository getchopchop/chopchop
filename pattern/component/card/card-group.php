<div class="grid g-gutter">
    <div class="g-col-sm-6 g-col-md-5 g-col-lg-4 g-col-xl-3">

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
                </div>
            </div>
            <div class="card">
                <div class="card__body">
                    <p><strong class="lead u-text-contextual-success">Free delivery.<br />Dispatched within 24 hours</strong></p>
                </div>
            </div>
        </div>

    </div>
</div>
