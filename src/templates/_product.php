<!-- Template: _product.php !-->
<article class="product-item">
    <div class="product-item__title">
        <?php
            $titles = array(
                'Future Deep House Vol 1',
                'Deep Techno Progressions Vol 3',
                'Hard Techno Hellfire',
                'Massive: Dark Techno Presets',
                'Deep Dub Techno Sessions Bundle'
            );
        ?>
        <h3><a href="#"><?php echo $titles[rand(0, (count($titles) - 1))]; ?></a></h3>
    </div>
    <div class="product-item__artwork">
        <p><a href="#"><img src="http://loremflickr.com/300/300/music,artwork?random=<?php echo rand(0,20); ?>" alt="Product image"></a></p>
    </div>
    <div class="product-item__info">
        <div class="product-item__discounts">
            <ul>
                <?php $discount = rand(0,3); ?>
                <?php if($discount >= 1) : ?><li><a class="discount discount--multibuy" href="#">Multi-buy</a></li><?php endif; ?>
                <?php if($discount >= 2) : ?><li><a class="discount discount--percentage" href="#">60% off</a></li><?php endif; ?>
                <?php if($discount >= 3) : ?><li><a class="discount discount--featured" href="#">Featured</a></li><?php endif; ?>
            </ul>
        </div>
        <div class="product-item__desc">
            <p>From Producer Loops contains five incredible Construction Kits inspired by artists including Oliver Heldens &amp; Dusky.</p>
        </div>
        <div class="product-item__controls">
            <ul>
                <li class="product-item__queue"><a href="#">Q</a></li>
                <li class="product-item__play"><a href="#">P</a></li>
                <li class="product-item__favourite"><a href="#">F</a></li>
            </ul>
        </div>
        <div class="product-item__price">
            <p class="product-item__gbp">&pound;29.39 <span>GBP</span></p>
            <p class="product-item__convert">(Approx. $297.42)</p>
        </div>
        <div class="product-item__buy">
            <p><a href="#" class="btn btn--primary btn--sm">Add to Cart</a></p>
        </div>
    </div>
</article>
<!-- End template: _product.php !-->
