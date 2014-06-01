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
<div class="container mtb">
	<div class="row">
		<div class="col-lg-8">
			<?php echo $this->Form->create('Post', array('url' => array('controller' => 'posts', 'action' => 'edit'))); ?>
			<?php echo $this->Form->input('id'); ?>
			<?php echo $this->Form->input('title'); ?>
			<?php echo $this->Form->input('image'); ?>
			<?php echo $this->Form->input('preview', array('id' => 'preview-content')); ?>
			<?php echo $this->Form->input('content', array('id' => 'post-content')); ?>
			<?php echo $this->Form->end('Submit'); ?>
		</div>
	</div>
</div>
<?php
echo $this->Html->scriptBlock(
	'$(document).ready(function () {
		CKEDITOR.replace("post-content");
		CKEDITOR.replace("preview-content");
	});',
	array('inline' => false)
);
?>
<?php echo $this->Html->script(
	array(
		'ckeditor/ckeditor'
	),
	array(
		'inline' => false
	)
);