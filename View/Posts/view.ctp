<!-- *****************************************************************************************************************
 BLUE WRAP
 ***************************************************************************************************************** -->


<!-- *****************************************************************************************************************
 BLOG CONTENT
 ***************************************************************************************************************** -->

<div class="container mtb">
	<div class="row">
		<! -- SINGLE POST -->
		<div class="col-md-12">
			<h1 class="ctitle"><a href="<?php echo $this->Html->url(array(
					'controller' => 'posts',
					'action' => 'view',
					$post['Post']['slug']
				)); ?>">
					<?php echo $post['Post']['title']; ?>
				</a>
			</h1>
			<div class="rainbow"></div>
			<br/>
			<?php if ($post['Post']['image']): ?>
			<p>
				<?php echo $this->Html->image($post['Post']['image'], array('class' => 'img-responsive')); ?>
			</p>
			<?php endif; ?>
			<p><csmall><?php echo $post['Post']['date_published']; ?></csmall></p>
			<div class="preview-content">
				<?php echo $post['Post']['preview']; ?>
			</div>
			<div>
				<?php echo $post['Post']['content']; ?>
			</div>
			<span class="tags-label"><?php echo __('Tags'); ?> :</span>
			<ul class="tagcloud">
				<?php
				foreach ($post['Tag'] as $tag) {
					echo $this->Html->tag('li', $tag['keyname']);
				}
				?>
			</ul>
			<?php echo $this->element('share'); ?>
			<div class="comments">
				<?php echo $this->element('comments', array('comments' => $post['Comment'], 'post_id' => $post['Post']['id'])); ?>
			</div>
		</div>
	</div><! --/row -->
</div><! --/container -->