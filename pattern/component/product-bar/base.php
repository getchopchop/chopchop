<?php /*
Title: Product bar
Class: .product-bar
Description: Fixes an item to the top of the page. Only visible with .is-active class.
*/ ?>

<div class="js-product-bar-trigger"></div>

<div class="js-product-bar product-bar u-hidden-xs u-hidden-sm">
    <div class="u-container u-block-top u-block-bottom">
        <div class="grid g-gutter-x g-stretch-first g-center-y">
            <div class="g-col-md-3">
                <div class="grid g-stretch-last g-gutter-x">
                    <div style="min-width: 5em;">
                        <div class="layer layer--lg">
                            <img src="<?php echo getUrl( 'build/img/product/' . getData('image', 1) ); ?>" width="50" height="50" />
                        </div>
                    </div>
                    <div class="g-col-sm-10">
                        <div class="title">
                            <h2 class="h4 product-bar__title">Sandisk 32GB Ultra Micro SD (SDHC) Card 80MB/s UHS-I Class 10 with Adapter</h2>
                            <?php printPattern('component/rating/stars'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="grid g-collapse g-gutter-x g-center-y">
                    <div>
                        <?php $price = getData('price'); ?>
                        <p>
                            <strong class="h4 u-text-contextual-error"><span class="u-visually-hidden">Now</span> &pound;<?php echo number_format($price * 0.8, 2); ?></strong> delivered<br />
                            Was <s>&pound;<?php echo number_format($price, 2); ?></s> &nbsp;You save &pound;<?php echo number_format($price * 0.2, 2); ?><br />
                        </p>
                    </div>
                    <div>
                        <label for="text" class="field-group__label u-visually-hidden">Qty:</label>
                        <form action="" class="grid g-gutter-x-sm g-center-y g-stretch-first">
                            <div>
                                <div class="field-group">
                                    <div class="field-group__field">
                                        <input id="text" type="number" placeholder="Qty" value="1" class="lead narrow">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn--lg">Add to basket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
