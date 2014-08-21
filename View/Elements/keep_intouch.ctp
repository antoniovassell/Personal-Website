<div class="container material">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center"><?php echo __('Keep In Touch'); ?></h1>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<h4><?php echo __('Subscribe for updates, new blog posts, new apps that I am about to release.'); ?></h4>
					</div>
					<div class="col-md-6">
						<br/>
						<?php
						echo $this->Form->create(
							'Subscription',
							array(
								'id' => 'subscription-form',
								'url' => array('controller' => 'subscriptions', 'action' => 'subscribe')
							)
						);
						echo $this->Form->input(
							'email_address',
							array(
								'type' => 'email',
								'label' => false,
								'placeholder' => __('Your Email Address'),
								'id' => 'subscribe-email',
								'required' => true
							)
						);
						?>
						<?php echo $this->Form->submit(__('Subscribe!'), array('class' => 'btn btn-danger', 'id' => 'subscribe-btn')); ?>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>