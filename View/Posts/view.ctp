<!-- *****************************************************************************************************************
 BLUE WRAP
 ***************************************************************************************************************** -->
<div class="sub-heading">
	<div class="container">
		<div class="row">
			<h1><?php echo __('Blog'); ?></h1>
		</div><!-- /row -->
	</div> <!-- /container -->
</div><!-- /blue -->


<!-- *****************************************************************************************************************
 BLOG CONTENT
 ***************************************************************************************************************** -->

<div class="container mtb">
	<div class="row">
		<! -- SINGLE POST -->
		<div class="col-lg-8">
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

		</div><! --/col-lg-8 -->
		<! -- SIDEBAR -->
		<div class="col-lg-4">
			<?php echo $this->element('sidebar'); ?>
		</div>
	</div><! --/row -->
</div><! --/container -->