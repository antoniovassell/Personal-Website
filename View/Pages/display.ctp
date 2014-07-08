<div id="home">
	<div class="demo-1">
		<div id="slider" class="sl-slider-wrapper">
			<div class="sl-slider">
				<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
					<div class="sl-slide-inner">
						<div class="deco" data-icon="H"></div>
						<h2>Antonio Vassell</h2>
						<blockquote>
							<p>
								Something worth talking about will go here
							</p>
						</blockquote>
					</div>
				</div>
				<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					<div class="sl-slide-inner">
						<div class="deco" data-icon="q"></div>
						<h2>Antonio Vassell</h2>
						<blockquote>
							<p>
								Something worth talking about will go here
							</p>
						</blockquote>
					</div>
				</div>
				<div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="deco" data-icon="O"></div>
						<h2>Antonio Vassell</h2>
						<blockquote>
							<p>
								Something worth talking about will go here
							</p>
						</blockquote>
					</div>
				</div>
				<div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="deco" data-icon="I"></div>
						<h2>Antonio Vassell</h2>
						<blockquote>
							<p>
								Something worth talking about will go here
							</p>
						</blockquote>
					</div>
				</div>
				<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="deco" data-icon="t"></div>
						<h2>Antonio Vassell</h2>
						<blockquote>
							<p>
								Something worth talking about will go here
							</p>
						</blockquote>
					</div>
				</div>
			</div><!-- /sl-slider -->
			<nav id="nav-arrows" class="nav-arrows">
				<span class="nav-arrow-prev">Previous</span>
				<span class="nav-arrow-next">Next</span>
			</nav>
			<nav id="nav-dots" class="nav-dots">
				<span class="nav-dot-current"></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</nav>
		</div><!-- /slider-wrapper -->
	</div>
</div>

<!-- *****************************************************************************************************************
 MIDDLE CONTENT
 ***************************************************************************************************************** -->
<div class="container mtb">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-1">
			<h4><?php echo __('More About My Blog'); ?></h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
			<p><br/><a href="about.html" class="btn btn-theme">More Info</a></p>
		</div>

		<div class="col-lg-3">
			<?php echo $this->element('Posts/popular_post_titles'); ?>
		</div>
		<div class="col-lg-3">
			<?php echo $this->element('Posts/latest_post_titles'); ?>
		</div>
	</div><! --/row -->
</div><! --/container -->
<!-- *****************************************************************************************************************
 TESTIMONIALS
 ***************************************************************************************************************** -->
<div class="rainbow"></div>
<div id="twrap">
	<div class="container centered">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<i class="fa fa-comment-o"></i>
				<blockquote>
					<p>
						I’m sorry, but I don’t want to be an emperor. That’s not my business. I don’t want to rule or conquer anyone. I should like to help everyone - if possible - Jew, Gentile - black man - white. We all want to help one another. Human beings are like that. We want to live by each other’s happiness - not by each other’s misery. We don’t want to hate and despise one another. In this world there is room for everyone. And the good earth is rich and can provide for everyone. The way of life can be free and beautiful, but we have lost the way...
					</p>
					<footer>
						Charlie Chaplin <br/> in <br/>
						<cite title="Source Title">
							<?php
							echo $this->Html->link(
								__('The Great Dictator'),
								'https://www.youtube.com/watch?v=WibmcsEGLKo',
								array('target' => '_blank')
							);
							?>
						</cite>
					</footer>
				</blockquote>
			</div>
		</div><! --/row -->
	</div><! --/container -->
</div><! --/twrap -->

<!-- *****************************************************************************************************************
 OUR CLIENTS
 ***************************************************************************************************************** -->
<div class="rainbow"></div>
<?php echo $this->element('contact'); ?>
<div class="rainbow"></div>
