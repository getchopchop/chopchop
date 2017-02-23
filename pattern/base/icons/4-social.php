<?php /*
Title: Social Icons
*/ ?>

<?php
    $icons = array(
        'linkedin',
        'twitter',
        'facebook',
        'google-plus',
        'instagram',
        'youtube',
        'pinterest',
        'tumblr'
    );
?>
<ul class="nav nav--inline nav--space">
    <?php foreach($icons as $icon) : ?><li><?php printSvg('social', $icon); ?></li><?php endforeach; ?>
</ul>