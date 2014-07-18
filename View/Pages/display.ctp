<div id="home">
	<div class="demo-1">
		<div id="slider" class="sl-slider-wrapper">
			<div class="sl-slider">
				<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
					<div class="sl-slide-inner">
						<div class="deco">
							<?php echo $this->Html->image('headmove.png', array('id' => 'headmove-central')); ?>
						</div>
						<h2>Antonio Vassell</h2>
						<blockquote>
							<p>
								<?php echo __('A Web Developer, who likes Artificial Intelligence and Machine Learning'); ?>
							</p>
						</blockquote>
					</div>
				</div>
			</div><!-- /sl-slider -->
			<nav id="nav-dots" class="nav-dots">
				<span class="nav-dot-current"></span>
			</nav>
		</div><!-- /slider-wrapper -->
	</div>
</div>
<div class="rainbow"></div>
<!-- *****************************************************************************************************************
 MIDDLE CONTENT
 ***************************************************************************************************************** -->
<div class="container mtb">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-1">
			<h4><?php echo __('More About My Blog'); ?></h4>
			<p>I blog mostly about code in generally, specifically CakePHP, and also show my interest of the field of Artificial Intelligence. More articles are there about global issues and saving humanity from its own destruction, my ultimate goal. Check out a few articles of your interest and let me know what you love or hate - do we agree or do we agree to disagree.</p>
			<p>
				<br/>
				<?php echo $this->Html->link(__('Go To Blog'), array('controller' => 'posts'), array('class' => 'btn btn-theme')); ?>
			</p>
		</div>

		<div class="col-lg-3">
			<?php echo $this->element('Posts/popular_post_titles'); ?>
		</div>
		<div class="col-lg-3">
			<?php echo $this->element('Posts/latest_post_titles'); ?>
		</div>
	</div><! --/row -->
</div><! --/container -->
