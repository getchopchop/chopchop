<?php /*
Title: Data
Description: A demo of using data. See documentation for <a href="https://github.com/getchopchop/chopchop/wiki/Data">more information</a>.
*/ ?>

<h5>Company Information</h5>
<ul>
<li>Name: <?php printData('company', 'name'); ?></li>
<li>Copyright: <?php printData('company', 'copyright'); ?></li>
<li>Twitter: <?php printData('company', 'twitter-handle'); ?></li>
</ul>

<h5>List of Titles</h5>
<ul>
    <?php for($i=0; $i<3; $i++) : ?>
        <li><?php printData('title', $i); ?></li>
    <?php endfor; ?>
</ul>

<h5>Random Title</h5>
<p><?php printData('title'); ?></p>

<h5>Price</h5>
<?php $price = getData('price'); ?>
<ul>
<li>Was &pound;<?php echo number_format($price * 0.8, 2); ?></li>
<li>Now &pound;<?php echo number_format($price, 2); ?></li>
<li>Save &pound;<?php echo number_format($price * 0.2, 2); ?></li>
</ul>

<h5>Random Colour</h5>
<p><?php printData('colour'); ?></p>

<h5>Random Size</h5>
<p><?php printData('size'); ?></p>

<h5>Random First Name</h5>
<p><?php printData('first-name'); ?></p>

<h5>Random Last Name</h5>
<p><?php printData('last-name'); ?></p>

<h5>Random Paragraph</h5>
<p><?php printData('paragraph'); ?></p>
