<?php /*
Title: Rating
Class: .rating
*/ ?>

<div class="rating">
    <div class="rating__stars">
        <div class="rating__negative">
            <?php for($i=0;$i<5;$i++) : ?>
                <?php printSvg('general', 'star-full'); ?>
            <?php endfor; ?>
        </div>
        <div class="rating__positive" style="width: <?php echo rand(60,100); ?>%;">
            <?php for($i=0;$i<5;$i++) : ?>
                <?php printSvg('general', 'star-full'); ?>
            <?php endfor; ?>
        </div>
    </div>
</div>
