<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>	  <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>		 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>		 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<jdoc:include type="head" />
		<script src="http://yandex.st/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://yandex.st/bootstrap/2.2.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://yandex.st/bootstrap/2.2.2/css/bootstrap.min.css">
		<style>
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<link rel="stylesheet" href="http://yandex.st/bootstrap/2.2.2/css/bootstrap-responsive.min.css">
		<script src="http://yandex.st/modernizr/2.6.2/modernizr.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<div class="container">
			<header class="header">
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<a class="brand" href="#">Project name</a>
							<div class="nav-collapse collapse">
								<jdoc:include type="modules" name="navbar" style="none"/>
								<form class="navbar-form pull-right">
									<input class="span2" type="text" placeholder="Email">
									<input class="span2" type="password" placeholder="Password">
									<button type="submit" class="btn">Sign in</button>
								</form>
							</div>
						</div>
					</div>
				</nav>
				<nav>
					<jdoc:include type="modules" name="breadcrumb" style="none"/>
				</nav>
			</header>
			<div class="row">
				<article class="span9">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</article>
				<nav class="span3">
					<jdoc:include type="modules" name="right" style="default"/>
				</nav>
				<!-- End Content -->
			</div>
			<footer class="footer">
				<jdoc:include type="modules" name="footer" style="default"/>
			</footer>
		</div>
	</body>
</html>

