<?php require_once('inc/functions.php'); ?>
<?php $paths = explode("/", substr($_SERVER['REQUEST_URI'], 1));?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('inc/meta.php'); ?>
    <title>Chop Chop - Little user interface patterns to get us going</title>
<?php include('inc/styles.php'); ?>
</head>
<body>


<div style="text-align: center;">
  <div class="title title--drawer">Title</div>
  <a href="#" class="btn" data-toggle="drawer" data-target="left" data-content="lc1" data-title="Look the title changes: left content block 1">Left Content Block 1</a>
  <a href="#" class="btn" data-toggle="drawer" data-target="bottom" data-content="bc1" data-title="Look the title changes: bottom content block 1">Bottom Content Block 1</a>
  <a href="#" class="btn" data-toggle="drawer" data-target="right" data-content="rc1" data-title="Look the title changes: right content block 1">Right Content Block 1</a>
  <br>
  <a href="#" class="btn" data-toggle="drawer" data-target="left" data-content="lc2" data-title="Look the title changes: left content block 2">Left Content Block 2</a>
  <a href="#" class="btn" data-toggle="drawer" data-target="bottom" data-content="bc2" data-title="Look the title changes: bottom content block 2">Bottom Content Block 2</a>
  <a href="#" class="btn" data-toggle="drawer" data-target="right" data-content="rc2" data-title="Look the title changes: right content block 2">Right Content Block 2</a>
</div>		

<aside role="drawer" id="drawer-left" class="drawer drawer--left">
  <div class="drawer__dialog">
    <div class="drawer__body">
      <div class="drawer__content">
        <div class="lc1 toggleable">Left Content 1</div><!--/widget-->
        <div class="lc2 toggleable">Left Content 2	</div><!--/widget-->
      </div><!--/drawer__content-->
    </div><!--/drawer__body-->
  </div>
</aside><!--/drawer--left-->


<aside role="drawer" id="drawer-right" class="drawer drawer--right">
  <div class="drawer__dialog">
    <div class="drawer__body">
      <div class="drawer__content">
        <div class="rc1 toggleable">Right Content 1</div>
        <div class="rc2 toggleable">Right Content 2</div>
      </div><!--/drawer__content-->
    </div><!--/drawer__body-->
  </div>
</aside><!--/drawer--right-->

<aside role="drawer" id="drawer-bottom" class="drawer drawer--bottom">
  <div class="drawer__dialog">
    <div class="drawer__body">
      <div class="drawer__content">
          <div class="bc1 toggleable">Bottom Content 1</div>
    	      <div class="bc2 toggleable">Bottom Content 2</div>
      </div>
    </div><!--/ drawer__body -->
  </div>
</aside><!--/drawer--bottom-->


<div style="margin-top: 100px" class="container">
  <p>Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page.</p>
  <p>Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page.</p>
  <p>Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page.</p>
  <p>Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page.</p>
  <p>Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page, Some dummy content on the page.</p>
</div>

<div class="overlay"></div>


    <?php include('inc/scripts.php'); ?>

</body>
</html>