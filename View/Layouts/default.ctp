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
		'/js-plugins/slitslider/css/style.css',
		'/essentia-assets/css/slider1.css',
		'style'
	));
	?>
	<?php echo $this->Html->script('/js-plugins/slitslider/js/modernizr.custom.79639.js'); ?>
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
// echo $this->AssetCompress->script('libs');
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
	'/js-plugins/slitslider/js/jquery.ba-cond.min.js',
	'/js-plugins/slitslider/js/jquery.slitslider.js',
	'app.js'
));
?>
<?php echo $this->fetch('script'); ?>

<script type="text/javascript">
	// Map
	google.maps.event.addDomListener(window, 'load', initialize);
	$(function() {
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();

				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {

						slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {

						$( this ).on( 'click', function( event ) {

							var $dot = $( this );

							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );

							}

							slitslider.jump( i + 1 );
							return false;

						} );

					} );

				};

			return { init : init };

		})();

		Page.init();

	});
</script>
</body>
</html>
