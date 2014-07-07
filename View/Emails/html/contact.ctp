<table>
	<tr>
		<td>
			<h3>Hi, Antonio Vassell</h3>
			<p class="lead"><?php echo __('You just got a message on your website!'); ?></p>
			<br/>
			<p>
				<strong><?php echo $message['Message']['name'];?></strong>
			</p>
			<p>
				<strong><?php echo $message['Message']['email_address'];?></strong>
			</p>
			<p>
				<strong><?php echo $message['Message']['subject'];?></strong>
			</p>
			<br/>
			<p>
				<blockquote>
					<?php echo $message['Message']['message']; ?>
				</blockquote>
			</p>
			<br/>
			<br/>
			<!-- Callout Panel -->
			<p class="callout">
				<a href="<?php echo Router::url(array('controller' => 'pages', 'action' => 'display'), true); ?>">Go to your website &raquo;</a>
			</p><!-- /Callout Panel -->
		</td>
	</tr>
</table>