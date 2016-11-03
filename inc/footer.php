<!-- Template: _footer !-->
<script src="<?php echo getUrl('build/vendor/svgxuse/svgxuse.js'); ?>" async></script>
<!--[if IE 9]>
    <script src="<?php echo getUrl('build/vendor/svg4everybody/svg4everybody.js'); ?>" async></script>
    <script async>svg4everybody(); // run it now or whenever you are ready</script>
<![endif]-->
<script src="<?php echo getUrl('build/vendor/picturefill/picturefill.js'); ?>" async></script>
<script src="<?php echo getUrl('build/vendor/jquery/jquery.js'); ?>"></script>
<?php /*?>
<script src="<?php echo getUrl('build/vendor/enquire/enquire.js'); ?>"></script>
<?php */ ?>
<script src="<?php echo getUrl('build/js/chopchop.lib.js'); ?>"></script>
<script src="<?php echo getUrl('build/js/priority-nav.js'); ?>"></script>
<script src="<?php echo getUrl('build/js/script.js'); ?>"></script>

<?php if(!isset($_GET['preview'])) : ?>
    <script src="<?php echo getUrl('build/vendor/jquery.cookie/jquery.cookie.js'); ?>"></script>
    <script src="<?php echo getUrl('build/vendor/prismjs/prism.js'); ?>"></script>
    <script src="<?php echo getUrl('build/js/chopchop-ui.js'); ?>"></script>
<?php endif; ?>
<!-- End template: _footer !-->
