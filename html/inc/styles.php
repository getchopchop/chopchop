<!-- Template: _styles !-->
<link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/vendor/normalize.css/normalize.css'); ?>" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/css/styles.css'); ?>" media="screen" />
<script src="<?php echo getUrl('build/vendor/picturefill/picturefill.js'); ?>"></script>

<?php if(!isset($_GET['preview'])) : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo getUrl('build/css/chopchop-ui.css'); ?>" media="screen" />
<?php endif; ?>
<!-- End template: _styles !-->
