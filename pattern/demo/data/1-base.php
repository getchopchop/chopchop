<?php /*
Title: Data
Description: A demo of using data. See documentation for more information.
*/ ?>

<h5>Global Site Information</h5>
<ul>
<li>Site Name: <?php printData('global', 'site-name'); ?></li>
<li>Tagline: <?php printData('global', 'tagline'); ?></li>
<li>Email: <?php printData('global', 'email'); ?></li>
</ul>

<h5>Company Information</h5>
<ul>
<li>Name: <?php printData('company', 'name'); ?></li>
<li>Copyright: <?php printData('company', 'copyright'); ?></li>
<li>Twitter: <?php printData('company', 'twitter-handle'); ?></li>
</ul>

<h5>List of Blog Posts</h5>
<ul>
    <?php for($i=0; $i<3; $i++) : ?>
        <li><?php printData('blog-title', $i); ?></li>
    <?php endfor; ?>
</ul>

<h5>Random Blog Title</h5>
<p><?php printData('blog-title'); ?></p>

<h5>Price</h5>
<ul>
<li>Base: <?php printData('price', 'base'); ?></li>
<li>Special: <?php printData('price', 'special'); ?></li>
<li>Saving: <?php printData('price', 'saving'); ?></li>
</ul>

<h5>Random Product Title</h5>
<p><?php printData('product-title'); ?></p>


<h5>Random Colour</h5>
<p><?php printData('colour'); ?></p>

<h5>Random Size</h5>
<p><?php printData('size'); ?></p>

<h5>Random Name</h5>
<p><?php printData('name'); ?></p>