<!DOCTYPE HTML>
<html lang="en-US">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">

	<title>Producer Loops - Style Guide</title>

	<?php include('../src/templates/_styles.php'); ?>

</head>
<body>

    <div class="wrapper">

        <?php include('../src/templates/_header.php'); ?>

        <?php include('../src/templates/_nav.php'); ?>

		<?php include('../src/templates/_confidence.php'); ?>

		<?php include('../src/templates/_search.php'); ?>

		<?php include('../src/templates/_breadcrumb.php'); ?>


        <section class="section main dots">
            <div class="container">
				<div class="gutter--lg">
					<aside class="sidebar">
						<div class="widget widget--open js-toggle">
							<h2 class="widget__title js-toggle__title"><span>Pages</span></h2>
							<div class="widget__content js-toggle__content">
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Our Team</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Policy</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
					</aside>
					<div class="main-content">
						<div class="products">
							<?php
								for($i = 0; $i <= 11; $i++) {
									include "../src/templates/_product.php";
								}
							?>
						</div>


						<article class="content">
			                <h1>Welcome to Producer Loops</h1>
							<p class="lead">Donec molestie nibh sit amet elit mattis viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi vel est porttitor, interdum sem ac, egestas lacus. Praesent vitae eros malesuada, suscipit odio pulvinar, pellentesque leo. Donec vel libero finibus, gravida nisi sollicitudi.</p>
			                <p>Donec molestie nibh sit amet elit mattis viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi vel est porttitor, interdum sem ac, egestas lacus. Praesent vitae eros malesuada, suscipit odio pulvinar, pellentesque leo. Donec vel libero finibus, gravida nisi sollicitudin, <a href="#">hendrerit ipsum</a>. Nam fermentum lacus eu eleifend pretium. Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>
							<p><a href="#" class="btn btn-default toggle-preview">Toggle player</a></p>
							<p>Donec molestie nibh sit amet elit mattis viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi vel est porttitor, interdum sem ac, egestas lacus. Praesent vitae eros malesuada, suscipit odio pulvinar, pellentesque leo. Donec vel libero finibus, gravida nisi sollicitudin, <a href="#">hendrerit ipsum</a>. Nam fermentum lacus eu eleifend pretium. Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>
			                <ul>
			                    <li>Donec molestie nibh sit amet elit mattis viverra.</li>
			                    <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.</li>
			                    <li>Cubilia Curae; Morbi vel est porttitor.</li>
			                    <li>Interdum sem ac, egestas lacus. Praesent vitae eros malesuada.</li>
			                    <li>Suscipit odio pulvinar, pellentesque leo.</li>
			                </ul>
			                <p>Donec molestie nibh sit amet elit mattis viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi vel est porttitor, interdum sem ac, egestas lacus. Praesent vitae eros malesuada, suscipit odio pulvinar, pellentesque leo. Donec vel libero finibus, gravida nisi sollicitudin, <a href="#">hendrerit ipsum</a>. Nam fermentum lacus eu eleifend pretium. Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>
			                <p>Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>
			                <p>Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>
			                <h2>A secondary heading</h2>
			                <p>Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>
			                <h3>A third heading</h3>
			                <p>Donec molestie nibh sit amet elit mattis viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi vel est porttitor, interdum sem ac, egestas lacus. Praesent vitae eros malesuada, suscipit odio pulvinar, pellentesque leo. Donec vel libero finibus, gravida nisi sollicitudin, <a href="#">hendrerit ipsum</a>. Nam fermentum lacus eu eleifend pretium. Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>
			                <ol>
			                    <li>Donec molestie nibh sit amet elit mattis viverra.</li>
			                    <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.</li>
			                    <li>Cubilia Curae; Morbi vel est porttitor.</li>
			                    <li>Interdum sem ac, egestas lacus. Praesent vitae eros malesuada.</li>
			                    <li>Suscipit odio pulvinar, pellentesque leo.</li>
			                </ol>
			                <p>Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>
			                <h4>A forth heading</h4>
			                <p>Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>
			                <h5>A fifth heading</h5>
			                <p>Pellentesque maximus nisl at erat tempus mattis. Ut tincidunt elit sed libero ornare tincidunt. In facilisis nisi orci, vel dignissim sapien pharetra eget. Donec viverra lobortis justo, ac gravida odio placerat euismod. Aenean aliquet nisi at magna placerat, cursus malesuada tortor consectetur. Vivamus auctor arcu ut ipsum auctor aliquet. Ut ullamcorper urna libero.</p>

							<form action="" method="post">
								<fieldset>
									<legend>Contact Us</legend>
									<div class="form-group">
										<label>Name</label>
										<input type="text">
									</div>
									<div class="form-group">
										<label>Email address</label>
										<input type="text">
									</div>
									<div class="form-group">
										<label>Telephone Number</label>
										<input type="text">
									</div>
									<div class="form-group">
										<label>Message</label>
										<textarea></textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn--default">Send enquiry</button>
								</fieldset>
							</form>

							<p><a href="#" class="btn">Standard button</a> <a href="#" class="btn btn--default">Default button</a> <a href="#" class="btn btn--primary">Primary button</a> <a href="#" class="btn btn--text">Text button</a></p>
							<p><a href="#" class="btn btn--lg">Standard button</a> <a href="#" class="btn btn--default btn--lg">Default button</a> <a href="#" class="btn btn--primary btn--lg">Primary button</a> <a href="#" class="btn btn--text btn--lg">Text button</a></p>
							<p><a href="#" class="btn btn--sm">Standard button</a> <a href="#" class="btn btn--default btn--sm">Default button</a> <a href="#" class="btn btn--primary btn--sm">Primary button</a> <a href="#" class="btn btn--text btn--sm">Text button</a></p>

						</article>
					</div>
				</div>
            </div>
        </section>

		<?php include('../src/templates/_footer.php'); ?>

		<?php include('../src/templates/_preview.php'); ?>

    </div>

	<?php include('../src/templates/_overlay.php'); ?>

	<?php include('../src/templates/_scripts.php'); ?>

</body>
</html>
