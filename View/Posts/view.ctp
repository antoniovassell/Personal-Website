<?php
$this->start('page_keywords');
echo $post['Post']['keywords'];
$this->end();
$this->start('page_title');
echo $post['Post']['title'];
$this->end();
?>
<div class="container post-cont">
	<div class="row">
		<! -- SINGLE POST -->
		<div class="col-md-9 material post-content">
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
		</div>
		<div class="col-md-3">
			<?php echo $this->element('sidebar'); ?>
		</div>
	</div><! --/row -->
</div><! --/container -->
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="comments">
				<?php echo $this->element('comments', array('comments' => $post['Comment'], 'post_id' => $post['Post']['id'])); ?>
				<br/>
			</div>
		</div>
	</div>
</div>