<!-- *****************************************************************************************************************
 BLUE WRAP
 ***************************************************************************************************************** -->
<div class="sub-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo __('Blog'); ?></h1>
			</div>
		</div><!-- /row -->
	</div> <!-- /container -->
</div><!-- /blue -->

<!-- *****************************************************************************************************************
 BLOG CONTENT
 ***************************************************************************************************************** -->

<div class="container mtb">
	<?php foreach ($posts as $post): ?>
	<div class="row">
		<div class="col-md-12">
				<div class="material post">
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
						<?php echo $this->Html->tag('h2', $post['Post']['title'], array('class' => 'ctittle')); ?>
					</a>
					<p><csmall><?php echo $post['Post']['date_published']; ?></csmall></p>
					<div>
						<?php echo $post['Post']['preview']; ?>
					</div>
					<p>
						<?php
						echo $this->Html->link(
							__('Read More'),
							array(
								'controller' => 'posts',
								'action' => 'view',
								$post['Post']['slug']
							),
							array(
								'class' => 'btn btn-default'
							)
						);
						?>
					</p>
					<br/>
					<span class="tags-label"><?php echo __('Tags'); ?> :</span>
					<ul class="tagcloud">
						<?php
						foreach ($post['Tag'] as $tag) {
							echo $this->Html->tag('li', $tag['keyname']);
						}
						?>
					</ul>
					<?php if ($isAdmin): ?>
						<p><?php echo $this->Html->link(__('[Edit]'), array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?></p>
						<p><?php echo $this->Html->link(__('[Delete]'), array('controller' => 'posts', 'action' => 'delete', $post['Post']['id'])); ?></p>
					<?php endif; ?>
					<div class="rainbow"></div>
					<div class="spacing"></div>
				</div>
		</div>
	</div><! --/row -->
	<?php endforeach; ?>
</div><! --/container -->