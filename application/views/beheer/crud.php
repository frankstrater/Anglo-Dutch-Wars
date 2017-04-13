<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>CMS Anglo-Dutch Wars</title>
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
	<style type="text/css">
		body {
			padding-top: 40px;
			padding-bottom: 40px;

		}

		.header {

		}

		.form-input-box img {
			height: 200px;
		}
	</style>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<a class="brand" href="<?php echo site_url('beheer/home')?>">CMS</a>
					<ul class="nav">
						<li><a href="<?php echo site_url('beheer/wars')?>">Wars</a></li>
						<li><a href="<?php echo site_url('beheer/battles')?>">Battles</a></li>
						<li><a href="<?php echo site_url('beheer/commanders')?>">Commanders</a></li>
						<li><a href="<?php echo site_url('beheer/battlecommanders')?>">Battle commanders</a></li>
						<li><a href="<?php echo site_url('beheer/xobjects')?>">X-objects</a></li>
						<li><a href="<?php echo site_url('beheer/home/logout')?>">Log out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="container">
			<?php echo $output; ?>
		</div>
	</div>
</body>
</html>
