<p>Containers are centered with various max widths.</p>
<h5>Available classes:</h5>

<?php $classes = parseCss('u-container'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>
