<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" href="<?php echo $this->Html->url('/img/myicon.png'); ?>">
	<title>Antonio Vassell</title>

	<?php
		echo $this->Html->css(array(
			'/theme-assets/css/bootstrap',
			'/theme-assets/css/font-awesome.min',
			'/theme-assets/css/style',
			'style'
		));
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
		<?php echo $this->element('header'); ?>
	</div>
	<div id="content-wrapper">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<?php echo $this->element('footer'); ?>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php
		echo $this->AssetCompress->script('libs');
		echo $this->Html->script(array(
			'/theme-assets/js/jquery.isotope.min.js',
			'jquery-parallax/jquery.parallax-1.1.3',
			'jquery.vticker.min',
			'app.js'
		));
	?>
	<?php echo $this->fetch('script'); ?>
</body>
</html>
