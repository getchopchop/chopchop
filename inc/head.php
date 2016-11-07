<!-- Template: _head !-->
<link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/vendor/normalize.css/normalize.css'); ?>" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/css/styles.css'); ?>" media="screen" />
<?php /* ?>
<script src="<?php echo getUrl('build/vendor/element-queries/ResizeSensor.js'); ?>"></script>
<script src="<?php echo getUrl('build/vendor/element-queries/ElementQueries.js'); ?>"></script>
<?php */ ?>
<?php if(!isset($_GET['preview'])) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/vendor/prismjs/prism.css'); ?>" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/css/chopchop-ui.css'); ?>" media="screen" />
<?php endif; ?>
<!-- End template: _head !-->
