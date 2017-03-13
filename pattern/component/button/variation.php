<?php
    $minus = array(
        'btn',
        'btn--text',
        'btn--block',
        'btn--sm',
        'btn--lg',
        'btn--ghost',
        'btn--disabled'
    );
    $classes = Helper::parseCss('btn--');
    $classes = array_diff($classes, $minus);

?>
<?php foreach($classes as $class) : ?>
    <p><a href="#" class="btn <?php echo $class; ?>"> <?php echo $class; ?> Button</a>
    <button type="button" class="btn <?php echo $class; ?>"> <?php echo $class; ?> Button</button></p>
    <p><a href="#" class="btn btn--ghost <?php echo $class; ?>"> <?php echo $class; ?> Ghost Button</a>
    <button type="button" class="btn btn--ghost <?php echo $class; ?>"> <?php echo $class; ?> Ghost Button</button></p>
<?php endforeach; ?>
