<?php /*
Title: Product grid
Class: .product-grid
Description: Extends the grid classes but makes it 5 across on screen(lg). Should be used when a sidebar is present. Normal grid classes should be used otherwise.
*/ ?>

<div class="product-grid">
    <?php for($i = 0; $i < 10; $i++) : ?>
        <div>
            <div class="u-block-xl u-fill-neutral-light">
            </div>
        </div>
    <?php endfor; ?>
</div>
