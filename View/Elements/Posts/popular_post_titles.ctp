<?php $posts = $this->requestAction(array('controller' => 'posts', 'action' => 'popular_post_list')); ?>
	<h4><?php echo __('Popular Posts'); ?></h4>
	<div class="hline"></div>
<?php foreach ($posts as $post): ?>
	<p>
		<?php
		$title = substr($post['Post']['title'], 0, 50);
		echo $this->Html->link(
			$title,
			array(
				'controller' => 'posts',
				'action' => 'view',
				$post['Post']['slug']
			)
		);
		?>
	</p>
<?php endforeach;
