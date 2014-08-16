<?php
$this->start('page_keywords');
echo __('blog, cakephp, posts, developer, web developer, antonio vassell');
$this->end();
?>
<div id="homepage-wrapper">
	<div id="bg-black">
		<div id="home-header-wrapper">
			<div id="home-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="hc-wrapper"><?php echo $this->Html->image('headmove.png', array('id' => 'headmove-central')); ?></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 showoff-text">
							<h1 class="text-center">Antonio Vassell</h1>
							<h3 class="text-center">Web Developer who loves CakePHP and Machine Learning</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<div class="rainbow"></div>
	<div class="about-me-section section">
		<div class="container material">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-center"><?php echo __('About Me'); ?></h1>
					<p class="text-center">I am an aspiring web developer with 3 years experience. My skills sets currently revolves around CakePHP, one of the most popular PHP MVC frameworks around, built for Rapid Application Development.</p>
					<p class="text-center">I am also interested in Artificial Intelligence and Medical Science. </p>
					<p class="text-center">My objective is to attain international recognition for designing novel solutions for global business operations and maintain a standard revolution.</p>
					<p class="text-center">I Currently employed at CakeDC as a CakePHP developer. If you have an idea that you are passionate about, lets talk.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="rainbow"></div>
	<div class="blog-preview section">
		<div class="container material">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center"><?php echo __('Blog'); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h3><?php echo __('More About My Blog'); ?></h3>
					<div class="rainbow"></div>
					<p>I blog mostly about code in generally, specifically <b>CakePHP</b>, and <b>Artificial Intelligence</b>. <b>Global Issues</b> such as <b>Conflicts</b> and <b>Poverty</b> are some things I can't stand, you will here about those as well. </p>
					<p>
						<br/>
						<?php echo $this->Html->link(__('Go To Blog'), array('controller' => 'posts'), array('class' => 'btn btn-theme')); ?>
					</p>
				</div>
				<div class="col-md-4">
					<?php echo $this->element('Posts/popular_post_titles'); ?>
				</div>
				<div class="col-md-4">
					<?php echo $this->element('Posts/latest_post_titles'); ?>
				</div>
			</div><! --/row -->
		</div><! --/container -->
	</div>
</div>