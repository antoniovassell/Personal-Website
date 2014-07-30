<?php $posts = $this->requestAction(array('controller' => 'posts', 'action' => 'recent_post_list')); ?>
<h3><?php echo __('Latest Posts'); ?></h3>
<div class="rainbow"></div>
<?php foreach ($posts as $post): ?>
	<p>
		<i class="fa fa-file-text"></i>
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
