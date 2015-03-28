<!DOCTYPE html>
<html lang="en">
<head>
    <?php // $this->assign('title', $title); ?>
    <?= $this->element('meta'); ?>
    <?php
    echo $this->Html->css(array(
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
    <style>
        #content-wrapper {
            margin-top: 5px;
        }
        .m-scene .scene_element {
            -webkit-animation-duration: 0.25s;
            animation-duration: 0.25s;
            -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both; }
    </style>

</head>

<body>
<div id="main" class="m-scene ">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <?php echo $this->element('header'); ?>
    </div>
    <br/>
    <br/>
    <br/>
    <div id="content-wrapper" >
        <?php
        echo $this->fetch('pageheader');
        ?>
        <div class="scene_element scene_element--fadein">
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
    <?php echo $this->element('footer'); ?>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<?php
echo $this->Html->script(array(
    'jquery.min',
    '/bootflat/js/bootstrap.min.js',
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
            move: '50px',
            mobile: true
        });
        $( '.fc-slideshow' ).flipshow();
    } );
</script>
</body>
</html>
