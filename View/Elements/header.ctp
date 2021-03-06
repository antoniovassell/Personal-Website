<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo $this->Html->url('/'); ?>">
			ANTUAN. <?php echo $this->Html->image('myicon.png', array('class' => 'my-icon')); ?>
		</a>
	</div>
	<div class="navbar-collapse collapse navbar-right">
		<ul class="nav navbar-nav">
			<li class="active">
				<?php echo $this->Html->link(__('HOME'), '/'); ?>
			</li>
			<li>
				<?php echo $this->Html->link(__('BLOG'), array('controller' => 'posts', 'action' => 'index', 'admin' => false)); ?>
			</li>
			<li>
				<?php echo $this->Html->link(__('CONTACT'), array('controller' => 'messages', 'action' => 'contact', 'admin' => false)); ?>
			</li>
			<li>
				<a href="https://github.com/antoniovassell" target="_blank"><i class="fa fa-github"></i></a>
			</li>
			<li>
				<a href="https://twitter.com/Antoniovassell" target="_blank"><i class="fa fa-twitter"></i></a>
			</li>
			<li>
				<a href="https://plus.google.com/+AntonioVassell" target="_blank"><i class="fa fa-google-plus"></i></a>
			</li>
			<li>
				<a href="https://www.facebook.com/antonio.vassell" target="_blank"><i class="fa fa-facebook"></i></a>
			</li>
			<li>
				<a href="http://instagram.com/antonio_vassell" target="_blank"><i class="fa fa-instagram"></i></a>
			</li>
			<li>
				<a href="http://www.linkedin.com/in/antoniovassell" target="_blank"><i class="fa fa-linkedin"></i></a>
			</li>
		</ul>
	</div><!--/.nav-collapse -->
</div>