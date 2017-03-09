<div class="scroll js-scroll is-start">
    <a href="#" class="scroll__arrow scroll__arrow--left js-scroll-left"></a>
    <a href="#" class="scroll__arrow scroll__arrow--right js-scroll-right"></a>
    <div class="scroll__container js-scroll__container">
        <div class="scroll__body">
        <?php for($i = 0; $i < 16; $i++) : ?>
            <div>
                <?php printPattern('component/product-item/base'); ?>
            </div>
        <?php endfor; ?>
        </div>
    </div>
</div>
