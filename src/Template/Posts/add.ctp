<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Post Views'), ['controller' => 'PostViews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post View'), ['controller' => 'PostViews', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="posts form large-10 medium-9 columns">
    <?= $this->Form->create($post); ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
            echo $this->Form->input('slug');
            echo $this->Form->input('title');
            echo $this->Form->input('content');
            echo $this->Form->input('date_published');
            echo $this->Form->input('post_view_count');
            echo $this->Form->input('comment_count');
            echo $this->Form->input('preview');
            echo $this->Form->input('image');
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('published');
            echo $this->Form->input('keywords');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
