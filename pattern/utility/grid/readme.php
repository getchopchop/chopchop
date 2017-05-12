<h4>Columns</h4>
<p>Grids are 12 columns at all screen sizes. At each breakpoint columns can be adapted. The following classes are available for columns:</p>

<?php $classes = Helper::parseCss('g-col-'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>


<h4>Gutters</h4>
<p>Gutters add spacing on the left and right of each column. All gutters are available for both x and y, just x or just y. Classes available for gutters:</p>

<?php $classes = Helper::parseCss('g-gutter'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>


<h4>Center</h4>
<p>Grids can be centered vertically, horizontally or both at the same time. Classes available:</p>

<?php $classes = Helper::parseCss('g-center'); ?>
<div class="cc-classes">
    <ul>
        <?php foreach($classes as $class) : ?>
            <li><code>.<?php echo $class; ?></code></li>
        <?php endforeach; ?>
    </ul>
</div>
