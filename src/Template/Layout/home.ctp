<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('meta'); ?>

    <?php
    echo $this->Html->css(array(
        'https://ihatetomatoes.net/demos/css3-preloader-transition/css/main.css',
        '/bootflat/css/bootstrap.min.css',
        '/bootflat/css/site.min.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
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
</head>

<body>

<div id="content-wrapper">
    <div class="scene_element scene_element--fadein">
        <?php echo $this->fetch('content'); ?>
    </div>
</div>

<?php echo $this->element('footer'); ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<?php
// echo $this->AssetCompress->script('libs');
echo $this->Html->script(array(
    'jquery.min',
    '/bootflat/js/bootstrap.min.js',
    '/bootflat/bootflat/js/bootflat.min.js',
    '/circle-slideshow/js/jquery.flipshow.js',
    /*'http://mynameismatthieu.com/WOW/dist/wow.min.js',*/
    'http://scrollrevealjs.org/js/scrollReveal.min.js?ver=2.1.0',
    'app.js'
));
?>
<?php echo $this->fetch('script'); ?>
<script>
    $( function() {
        'use strict';
        window.sr= new scrollReveal({
            reset: true,
            move: '0px',
            mobile: true
        });
        $( '.fc-slideshow' ).flipshow();
    } );
</script>
</body>
</html>
