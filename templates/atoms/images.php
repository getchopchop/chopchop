<div class="u-container">
    
    <h2>Image with Utitlity Class</h2>
    <p>This image uses the <code>.u-img-responsive</code> class.</p>
    
    <img src="<?php echo getUrl('src/img/placeholders/yellow/500x500.gif'); ?>" width="500" height="500" alt="Demo Image" class="u-img-responsive" />
    
    <hr />
    
    <h2>Image using <code>&lt;picture&gt;</code> tag</h2>
    <p>This <code>&lt;picture&gt;</code> is set to change at <code>media="(min-width: 768px)"</code>.</p>
    <picture>
        <source srcset="<?php echo getUrl('src/img/placeholders/yellow/1000x1000.gif'); ?>" media="(min-width: 768px)" />
        <img srcset="<?php echo getUrl('src/img/placeholders/red/1000x1000.gif'); ?>" alt="Demo Image" />
    </picture>
    
    <hr />
    
    <h2>Image inside <code>&lt;figure&gt;</code> tag</h2>
    <figure>
        <img src="<?php echo getUrl('src/img/placeholders/yellow/500x500.gif'); ?>" width="500" height="500" alt="Demo Image" />
    </figure>
    
</div>
