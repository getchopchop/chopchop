<?php /*
Title: Picture
*/ ?>

<picture>
    <source srcset="<?php echo getUrl('../build/img/placeholders/yellow/1000x1000.gif'); ?>" media="(min-width: 768px)" />
    <img srcset="<?php echo getUrl('../build/img/placeholders/red/1000x1000.gif'); ?>" alt="Demo Image" />
</picture>
