<?php /*
Title: Layer
Class: .layer
Description: Uses ratios to ensure the image is contained within a square. Used on all product images.
*/ ?>

<div class="layer">
    <a href="#"><img src="<?php //echo getUrl( 'build/img/product/' . getData('image') ); ?>" class="u-center" alt="<?php printData('title'); ?>" /></a>
</div>
