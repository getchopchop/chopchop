<div class="u-container">
    
    <p class="cc-heading">Responsive Utility <code>.u-img-responsive</code></p>
    <img src="<?php echo getUrl('../build/img/placeholders/yellow/500x500.gif'); ?>" width="500" height="500" alt="Demo Image" class="u-img-responsive" />
    
    <hr />
    
    <p class="cc-heading">Picture Element <code>&lt;picture&gt;</code>
        <span class="cc-heading__sub">set to change at <code>media="(min-width: 768px)"</code></span>
    </p>
    <picture>
        <source srcset="<?php echo getUrl('../build/img/placeholders/yellow/1000x1000.gif'); ?>" media="(min-width: 768px)" />
        <img srcset="<?php echo getUrl('../build/img/placeholders/red/1000x1000.gif'); ?>" alt="Demo Image" />
    </picture>
    
    <hr />
    
    <p class="cc-heading">Figure <code>&lt;figure&gt;</code></p>
    <figure>
        <img src="<?php echo getUrl('../build/img/placeholders/yellow/500x500.gif'); ?>" width="500" height="500" alt="Demo Image" />
    </figure>
    
</div>
