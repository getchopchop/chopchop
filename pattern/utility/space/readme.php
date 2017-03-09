<p>Adds small margins to elements. Can pass through a size and position. Position accepts top or bottom. Size accepts values inside the spacing variables array. Position is optional. Will apply to both top and bottom without it.</p>

<h4>Available classes:</h4>

<?php $classes = Helper::parseCss('u-space'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>

