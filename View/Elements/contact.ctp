<div id="contact-map-wrap">
	<div id="map_canvas"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="jumbotext"><?php echo __('Get In Touch'); ?></h1>
				<p class="jtsub"><?php echo __('Do you need a web application, have a question or comment? Please feel free to reach out.'); ?></p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<h2><?php echo __('Message'); ?></h2>
			<hr />
			<?php echo $this->Form->create('Message', array('url' => array('controller' => 'messages', 'action' => 'send_message'))); ?>
				<?php echo $this->Form->input('name'); ?>
				<?php echo $this->Form->input('email_address'); ?>
				<?php echo $this->Form->input('subject'); ?>
				<?php echo $this->Form->input('message'); ?>
			<?php echo $this->Form->end('Submit'); ?>
		</div>
		<div class="col-lg-4">
			<h2><?php echo __('Social'); ?></h2>
			<hr />
			<ul id="get-social">
				<li>
					<a href="https://github.com/antoniovassell" target="_blank"><i class="fa fa-github"></i> GitHub</a>
				</li>
				<li>
					<a href="https://twitter.com/Antoniovassell" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
				</li>
				<li>
					<a href="https://plus.google.com/+AntonioVassell" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>
				</li>
				<li>
					<a href="https://www.facebook.com/antonio.vassell" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
				</li>
				<li>
					<a href="http://instagram.com/antonio_vassell" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
				</li>
				<li>
					<a href="http://www.linkedin.com/in/antoniovassell" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a>
				</li>
			</ul>
		</div>
		<div class="col-lg-4">
			<h2><?php echo __('Contact Details'); ?></h2>
			<hr />
			<address>
				<strong>Antonio Vassell.</strong><br>
				Kingston 5<br>
				Jamaica<br>
				<abbr title="Phone">T:</abbr> (876) 846-6974
			</address>
		</div>
	</div>
</div>
<?php echo $this->Html->script('https://maps.googleapis.com/maps/api/js', array('inline' => false));