<?php /*
Title: Large Single form
Class: .single-form.single-form--lg
Description: For an input and button next to each other. Main use is for search but not limited to that. Other examples could be newsletter sign up and applying discount codes.
*/ ?>

<form action="" autocomplete="off" class="single-form single-form--lg">
    <label for="search" class="u-visually-hidden u-text-white">Search</label>
    <div class="grid g-stretch-first g-center-y">
        <div>
            <?php printPattern('component/suggestive-search/base'); ?>
        </div>
        <div>
            <button type="submit" class="btn btn--red"><?php printSvg('general', 'search3'); ?></button>
        </div>
    </div>
</form>
