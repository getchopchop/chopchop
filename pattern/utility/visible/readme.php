<p>Visibibility classes show and hide content at different breakpoints.</p>

<h4>Visible Classes</h4>

<?php $classes = Helper::parseCss('u-visible'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>

<h4>Hidden Classes</h4>

<?php $classes = Helper::parseCss('u-hidden'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>

<h4>Visually Hidden Classes</h4>

<?php $classes = Helper::parseCss('u-visually'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>
