<!-- *****************************************************************************************************************
 HEADERWRAP
 ***************************************************************************************************************** -->
<div id="headerwrap">
	<div class="container">
		<div class="row">
			<div class="ticker-cont col-lg-12">
				<div id="ticker">
					<ul>
						<li><h1 class="name">I'M ANTONIO VASSELL</h1></li>
						<li><h1 class="">I <span class="glyphicon glyphicon-heart"></span> WEB DEVELOPMENT</h1></li>
						<li><h1 class="">I <span class="glyphicon glyphicon-heart"></span> MACHINE LEARNING</h1></li>
					</ul>
				</div>
				<p class="after-name"><span class="span-text title-font">Software &amp; Web Developer</span></p>
			</div>
			<div class="col-lg-8 col-lg-offset-2 himg">
				<img src="/electroswing/theme-assets/img/browser.png" class="img-responsive">
			</div>
		</div><!-- /row -->
	</div> <!-- /container -->
</div><!-- /headerwrap -->

<!-- *****************************************************************************************************************
 SERVICE LOGOS
 ***************************************************************************************************************** -->
<div class="rainbow"></div>
<div id="service">
	<div class="container">
		<div class="row centered">
			<div class="col-md-4">
				<i class="fa fa-heart-o"></i>
				<h4>Handsomely Crafted</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<p><br/><a href="#" class="btn btn-theme">More Info</a></p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-flask"></i>
				<h4>Retina Ready</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<p><br/><a href="#" class="btn btn-theme">More Info</a></p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-trophy"></i>
				<h4>Quality Theme</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<p><br/><a href="#" class="btn btn-theme">More Info</a></p>
			</div>
		</div>
	</div><! --/container -->
</div><! --/service -->

<!-- *****************************************************************************************************************
 PORTFOLIO SECTION
 ***************************************************************************************************************** -->
<div class="rainbow"></div>
<div id="portfoliowrap">
	<h3><?php echo __('GALLERY'); ?></h3>
	<?php echo $this->Html->image('home/test-run.PNG'); ?>
	</div><!-- portfolio container -->
</div><!--/Portfoliowrap -->


<!-- *****************************************************************************************************************
 MIDDLE CONTENT
 ***************************************************************************************************************** -->
<div class="container mtb">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-1">
			<h4>More About Our Agency.</h4>
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
						Charlie Chaplin <br/> in <br/> <cite title="Source Title">The Great Dictator</cite>
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
<div id="cwrap">
	<div class="container">
		<div class="row centered">
			<h3>OUR CLIENTS</h3>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<img src="/electroswing/theme-assets/img/clients/client01.png" class="img-responsive">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<img src="/electroswing/theme-assets/img/clients/client02.png" class="img-responsive">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<img src="/electroswing/theme-assets/img/clients/client03.png" class="img-responsive">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<img src="/electroswing/theme-assets/img/clients/client04.png" class="img-responsive">
			</div>
		</div><! --/row -->
	</div><! --/container -->
</div><! --/cwrap -->
<div class="rainbow"></div>
<?php echo $this->element('contact'); ?>
<br/>
<div class="rainbow"></div>
