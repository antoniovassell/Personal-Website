<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('meta'); ?>

    <?php
    echo $this->Html->css(array(
        'https://ihatetomatoes.net/demos/css3-preloader-transition/css/main.css',
        '/bootflat/css/bootstrap.min.css',
        '/bootflat/css/site.min.css',
        '/theme-assets/css/font-awesome.min',
        '/circle-slideshow/css/default.css',
        '/circle-slideshow/css/component.css',
        '/bootflat/bootflat/css/bootflat.min.css',
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
    <style type="text/css">
        .back-link a {
            color: #4ca340;
            text-decoration: none;
            border-bottom: 1px #4ca340 solid;
        }
        .back-link a:hover,
        .back-link a:focus {
            color: #408536;
            text-decoration: none;
            border-bottom: 1px #408536 solid;
        }
        h1 {
            height: 100%;
            /* The html and body elements cannot have any padding or margin. */
            margin: 0;
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;
            font-size: 32px;
            margin-bottom: 3px;
        }
        .entry-header {
            text-align: left;
            margin: 0 auto 50px auto;
            width: 80%;
            max-width: 978px;
            position: relative;
            z-index: 10001;
        }
        #demo-content {
            padding-top: 100px;
        }
        #carbonads-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000000;
        }
    </style>
</head>

<body>

<div id="content-wrapper">
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
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
    '/circle-slideshow/js/jquery.flipshow.js',
    'app.js'
));
?>
<?php echo $this->fetch('script'); ?>
<script>
    $( function() {
        $( '.fc-slideshow' ).flipshow();
    } );
</script>
</body>
</html>
