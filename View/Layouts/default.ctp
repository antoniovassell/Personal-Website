<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="/theme-assets/ico/favicon.ico">

	<title>SOLID - Bootstrap 3 Theme</title>

	<?php
		echo $this->Html->css(array(
				'/theme-assets/css/bootstrap',
				'/theme-assets/css/style',
				'/theme-assets/css/font-awesome.min'
			)
		);
	?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php
		echo $this->Html->script(array(
			'/theme-assets/js/modernizr',
			'html5shiv',
			'respond'
		));
	?>
	<![endif]-->
</head>

<body>

	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<?php echo $this->element('header');?>
	</div>

	<?php echo $this->fetch('content');?>
	<?php echo $this->element('footer');?>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php
		echo $this->Html->script(array(
			'jquery.min',
			'/theme-assets/js/bootstrap.min.js',
			'/theme-assets/js/retina-1.1.0.js',
			'/theme-assets/js/jquery.hoverdir.js',
			'/theme-assets/js/jquery.hoverex.min.js',
			'/theme-assets/js/jquery.prettyPhoto.js',
			'/theme-assets/js/jquery.isotope.min.js',
			'/theme-assets/js/custom.js',
			'jquery-parallax/jquery.parallax-1.1.3',
			'jquery-parallax/jquery.localscroll-1.2.7-min',
			'jquery-parallax/scrollTo-1.4.2-min',
			'jquery.vticker.min',
			'app.js'
		));
	?>
</body>
</html>
