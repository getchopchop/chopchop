<?php /*
Title: Rating stars with radio input
Class: .rating--input
*/ ?>

<p class="h5">How do you rate this?</p>
<div class="rating rating--lg rating--input">
    <div class="rating__stars">
        
        <input type="radio" name="ratings[2]" id="Rating_5" value="5" class="radio">
        <label for="Rating_5" title="Excellent!"><span class="u-visually-hidden">5 star</span><?php printSvg('general', 'star-full'); ?></label>
    
        <input type="radio" name="ratings[2]" id="Rating_4" value="4" class="radio">
        <label for="Rating_4" title="Great"><span class="u-visually-hidden">4 star</span><?php printSvg('general', 'star-full'); ?></label>
    
        <input type="radio" name="ratings[2]" id="Rating_3" value="3" class="radio">
        <label for="Rating_3" title="Good"><span class="u-visually-hidden">3 star</span><?php printSvg('general', 'star-full'); ?></label>
    
        <input type="radio" name="ratings[2]" id="Rating_2" value="2" class="radio">
        <label for="Rating_2" title="OK"><span class="u-visually-hidden">2 star</span><?php printSvg('general', 'star-full'); ?></label>
    
        <input type="radio" name="ratings[2]" id="Rating_1" value="1" class="radio">
        <label for="Rating_1" title="Meh"><span class="u-visually-hidden">1 star</span><?php printSvg('general', 'star-full'); ?></label>

    </div>
</div>