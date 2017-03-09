<p>Sections add large margin above, below or both to a section.</p>
<h4>Available classes:</h4>

<?php $classes = Helper::parseCss('u-section'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>
