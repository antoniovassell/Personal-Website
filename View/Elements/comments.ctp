<?php if (!empty($comments)): ?>
	<h3><?php echo __('Comments'); ?></h3>
<?php endif; ?>

<div class="p-comments">
	<?php foreach ($comments as $comment): ?>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="media">
				<a class="pull-left" href="#">
					<?php
					$imageUrl = $this->Gravatar->getGravatar($comment['email_address']);
					echo $this->Html->image($imageUrl, array('class' => 'media-object img-circle user-image', 'alt' => 'User image'));
					?>
				</a>
				<div class="media-body">
					<h4 class="media-heading"><?php echo $comment['name']; ?></h4>
					<span><?php echo $this->Time->timeAgoInWords($comment['date']); ?></span>
					<div class="comment-body"><?php echo $comment['comment']; ?></div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach;?>
</div>
<br/>
<br/>
<div class="add-comments">
	<?php echo $this->Form->create('Comment', array('id' => 'comment-form')); ?>
	<h3>
		<?php
		if (!empty($comments)) {
			echo __('Your Comment');
		} else {
			echo __('Have The First Say');
		}
		?>
	</h3>
	<?php
	echo $this->Form->input('post_id', array('type' => 'hidden', 'value' => $post_id));
	echo $this->Form->input('name', array('placeholder' => __('Your Name'), 'required', 'label' => false, 'required' => true));
	echo $this->Form->input('email_address', array('placeholder' => __('Your Email Address'), 'label' => false, 'required' => true));
	echo $this->Form->input('comment', array('type' => 'textarea', 'placeholder' => __('Your Comment'), 'label' => false, 'required' => true));
	echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-danger'));
	?>
	<?php echo $this->Form->end(); ?>
</div>
<?php
echo $this->Html->script('jquery.form.min.js', array('inline' => false));
$this->Html->scriptBlock(
	"$('#comment-form').ajaxForm({
		dataType: 'json',
		url: '" . $this->Html->url(array('controller' => 'comments', 'action' => 'add')) . "',
		success: function (data) {
			if (data['success'] == true) {
				location.reload();
			} else {
				alert('Bad luck: There was an error');
			}
		}
	});
	",
	array('inline' => false)
);