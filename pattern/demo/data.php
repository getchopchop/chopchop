<?php /*
Title: Data
Description: A demo of using data. See documentation for more information.
*/ ?>

<h5>List of blog posts</h5>
<ul>
    <?php for($i=0; $i<3; $i++) : ?>
        <li><?php printData('blog-title', $i); ?></li>
    <?php endfor; ?>
</ul>

<h5>Random blog title</h5>
<p><?php printData('blog-title'); ?></p>

<h5>Global site information</h5>
<p><?php printData('global', 'site-name'); ?></p>
