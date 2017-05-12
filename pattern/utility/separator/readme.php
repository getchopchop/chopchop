<p>Separators add a border around a div or to one specific side.</p>
<h4>Available classes:</h4>

<?php $classes = Helper::parseCss('u-separator'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>
