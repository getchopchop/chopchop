<p>Adds padding and explicitly displays the element as a block.</p>
<h4>Available classes:</h4>

<?php $classes = Helper::parseCss('u-block'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>
