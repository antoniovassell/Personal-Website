<h4>Search</h4>
<div class="rainbow"></div>
<br/>
<?php echo $this->Form->create('Post', array('url' => array('controller' => 'posts', 'action' => 'index'))); ?>
	<?php echo $this->Form->input('title', array('label' => false, 'placeholder' => 'Search title', 'required' => false)); ?>
<?php echo $this->Form->end('Search');