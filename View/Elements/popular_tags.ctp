<h4>Popular Tags</h4>
<?php $tags = $this->requestAction(array('controller' => 'posts', 'action' => 'popular_tags')); ?>
<ul class="tagcloud">
	<?php
	echo $this->TagCloud->display($tags, array(
		'before' => '<li size="%size%" class="tag">',
		'after' => '</li>',
		'url' => array('controller' => 'posts', 'action' => 'index')
	));
	?>
</ul>