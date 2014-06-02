<!-- *****************************************************************************************************************
 BLUE WRAP
 ***************************************************************************************************************** -->
<div id="blue">
	<div class="container">
		<div class="row">
			<h3>Blog List.</h3>
		</div><!-- /row -->
	</div> <!-- /container -->
</div><!-- /blue -->


<!-- *****************************************************************************************************************
 BLOG CONTENT
 ***************************************************************************************************************** -->

<div class="container mtb">
	<div class="row">

		<! -- BLOG POSTS LIST -->
		<div class="col-lg-8">
			<?php foreach ($recentPosts as $post): ?>
				<?php if ($post['Post']['image']): ?>
				<p>
					<?php echo $this->Html->image($post['Post']['image'], array('class' => 'img-responsive')); ?>
				</p>
				<?php endif; ?>
				<a href="<?php echo $this->Html->url(array(
					'controller' => 'posts',
					'action' => 'view',
					$post['Post']['slug']
				)); ?>">
					<?php echo $this->Html->tag('h3', $post['Post']['title'], array('class' => 'ctittle')); ?>
				</a>
				<p><csmall><?php echo $post['Post']['date_published']; ?></csmall></p>
				<div>
					<?php echo $post['Post']['preview']; ?>
				</div>
				<p><?php echo $this->Html->link(__('[Read More]'), array('controller' => 'posts', 'action' => 'view', $post['Post']['slug'])); ?></p>
				<?php if ($isAdmin): ?>
					<p><?php echo $this->Html->link(__('[Edit]'), array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?></p>
					<p><?php echo $this->Html->link(__('[Delete]'), array('controller' => 'posts', 'action' => 'delete', $post['Post']['id'])); ?></p>
				<?php endif; ?>
				<div class="hline"></div>
				<div class="spacing"></div>
			<?php endforeach; ?>
		</div><! --/col-lg-8 -->
		<! -- SIDEBAR -->
		<div class="col-lg-4">
			<?php echo $this->element('sidebar'); ?>
		</div>
	</div><! --/row -->
</div><! --/container -->