<!DOCTYPE html>
<html lang="nl" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="utf-8">
	<title>Anglo-Dutch Wars</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">

	<link href="http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:400" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/magic-bootstrap-min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/screen.css" rel="stylesheet">

	<script src="https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.js"></script>
	<link href="https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.css" rel="stylesheet">

	<link rel="apple-touch-icon" href="">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<div class="modal fade" id="modalOCD" tabindex="-1" role="dialog" aria-labelledby="myModalOCD" aria-hidden="true"></div>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= site_url() ?>">Anglo-Dutch Wars</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li<?= ($this->war_active == 'First') ? ' class="active"' : '' ?>><a href="<?= site_url('war/view/1') ?>">First War</a></li>
				<li<?= ($this->war_active == 'Second') ? ' class="active"' : '' ?>><a href="<?= site_url('war/view/2') ?>">Second War</a></li>
				<li<?= ($this->war_active == 'Third') ? ' class="active"' : '' ?>><a href="<?= site_url('war/view/3') ?>">Third War</a></li>
				<li<?= ($this->war_active == 'Fourth') ? ' class="active"' : '' ?>><a href="<?= site_url('war/view/4') ?>">Fourth War</a></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Your score: <?= $this->total_score ?> </a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>


<div id="content">

	<div class="container">

