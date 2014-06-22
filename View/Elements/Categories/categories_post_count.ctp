<?php $categories = $this->requestAction(array('controller' => 'categories', 'action' => 'categories_with_post_count')); ?>
<h4><?php echo __('Categories'); ?></h4>
<div class="rainbow"></div>
<?php foreach ($categories as $category): ?>
	<p>
		<a href="<?php echo $this->Html->url(array('controller' => 'posts', 'action' => 'index', 'category_name' => $category['Category']['name'])); ?>"><i class="fa fa-angle-right"></i>
			<?php echo $category['Category']['name']; ?>
		</a>
		<span class="badge badge-theme pull-right"><?php echo $category['Category']['post_count']; ?></span>
	</p>
<?php endforeach;
