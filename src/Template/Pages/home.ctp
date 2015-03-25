<?php $this->layout = 'home'; ?>
<div class="fc-slideshow-container">
    <div class="main">
        <div id="fc-slideshow" class="fc-slideshow">
            <ul class="fc-slides">
                <li>
                    <?= $this->Html->image('/circle-slideshow/images/1.jpg'); ?>
                    <h3>Antonio Vassell</h3>
                </li>
                <li>
                    <?= $this->Html->image('/circle-slideshow/images/2.jpg'); ?>
                    <h3>Web Developer</h3>
                </li>
                <li>
                    <?= $this->Html->image('/circle-slideshow/images/3.jpg'); ?>
                    <h3>Data Scientist</h3>
                </li>
                <li>
                    <?= $this->Html->image('/circle-slideshow/images/4.jpg'); ?>
                    <h3>World Leader</h3>
                </li>
                <li>
                    <?= $this->Html->image('/circle-slideshow/images/5.jpg'); ?>
                    <h3>Blog</h3>
                </li>
                <li>
                    <?= $this->Html->image('/circle-slideshow/images/6.jpg'); ?>
                    <h3>Portfolio</h3>
                </li>
                <li>
                    <?= $this->Html->image('/circle-slideshow/images/7.jpg'); ?>
                    <h3>Contact</h3>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="navbar navbar-default" role="navigation">
    <?php echo $this->element('header'); ?>
</div>
<div >
    <div>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center"><?php echo __('About Me'); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>I am an aspiring web developer with 3 years experience. My skills sets currently revolves around CakePHP, one of the most popular PHP MVC frameworks around, built for Rapid Application Development.</p>

                        <p>I am also interested in Artificial Intelligence and Medical Science.</p>

                        <p>My objective is to attain international recognition for designing novel solutions for global business operations and maintain a standard revolution.</p>

                        <p>I Currently employed at CakeDC as a CakePHP developer. If you have an idea that you are passionate about, lets talk.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="main">
                            <div id="fc-about-me" class="fc-slideshow">
                                <ul class="fc-slides">
                                    <li>
                                        <?= $this->Html->image('/circle-slideshow/images/1.jpg'); ?>
                                        <h3>Me!</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
</div>
<div class="container-fluid blog-snip">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><?php echo __('Blog'); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">

                <div class="caption text-center"><h3>Thumbnail label</h3>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id ...</p>

                    <p class="text-center">
                        <?= $this->Html->link(__('Read More'), '#', ['role' => 'button', 'class' => 'btn btn-warning']); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">

                <div class="caption text-center"><h3>Thumbnail label</h3>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id ...</p>

                    <p class="text-center">
                        <?= $this->Html->link(__('Read More'), '#', ['role' => 'button', 'class' => 'btn btn-warning']); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">

                <div class="caption text-center"><h3>Thumbnail label</h3>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id ...</p>

                    <p class="text-center">
                        <?= $this->Html->link(__('Read More'), '#', ['role' => 'button', 'class' => 'btn btn-warning']); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <div class="caption text-center"><h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id ...</p>

                    <p class="text-center">
                        <?= $this->Html->link(__('Read More'), '#', ['role' => 'button', 'class' => 'btn btn-warning']); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center"><a href="#" class="btn btn-warning" role="button">View All</a></p>
    </div>
</div>

<div class="container">
    <?= $this->element('Frontend/showcase', ['showcaseData' => Cake\Core\Configure::read('ShowcaseData.portfolio')]); ?>
</div>

<div class="container-fluid featured-website-area">
    <div class="container">
        <?= $this->element('Frontend/jombotron', ['jombotronData' => Cake\Core\Configure::read('JombotronData.featured_websites')]); ?>
    </div>
</div>
<div class="container">

</div>
<style>
    #fc-about-me {
        width: 250px;
        height: 250px;
    }
    canvas {
        margin-top: -150px;
    }
</style>
