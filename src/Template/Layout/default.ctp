<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('meta'); ?>

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
    <?php
    if (\Cake\Core\Configure::read('debug') === 0) {
        echo $this->element('google_analytics');
    }
    ?>
</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <?php echo $this->element('header'); ?>
</div>
<br/>
<br/>
<br/>
<br/>
<div id="content-wrapper">
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
</body>
</html>
