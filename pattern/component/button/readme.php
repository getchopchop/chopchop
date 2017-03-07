<h1>example of readme</h1>
<pre>
<code>
<?php
$html = '<div class="module fullwidth" style="background: blue;">
<div class="container">
<p>Content goes here.</p>
</div>
</div>';
echo makePreWork($html);
?>
</code>
</pre>
<?php function makePreWork($html) { return htmlentities($html); } ?>

