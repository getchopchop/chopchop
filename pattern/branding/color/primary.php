
<?php $colors = Helper::parseCss('u-fill-primary'); ?>

<div class="grid g-gutter">
    <?php foreach($colors as $color) : ?>
        <div class="g-col-xs-6 g-col-sm-4 g-col-lg-3 g-col-xl-2">
            <div class="cc-color">
                <div class="cc-color__swatch <?php echo $color ?>">
                </div>
                <div class="cc-color__body">
                    <h6><?php echo str_replace('-', ' ', str_replace('u-fill-', '', $color)); ?></h6>
                    <p><?php echo $color; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
