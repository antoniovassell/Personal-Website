<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="subscritions-list material">
				<h2><?php echo __('Subscriptions List'); ?></h2>
				<table class="table table-bordered">
					<thead>
						<th><?php echo __('Email Address'); ?></th>
						<th><?php echo __('Date'); ?></th>
					</thead>
					<tbody>
						<?php foreach ($subscriptions as $subscription): ?>
							<tr>
								<td><?php echo $subscription['Subscription']['email_address']; ?></td>
								<td><?php echo $subscription['Subscription']['date']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
