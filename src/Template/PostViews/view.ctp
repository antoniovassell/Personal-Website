<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Post View'), ['action' => 'edit', $postView->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post View'), ['action' => 'delete', $postView->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postView->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Post Views'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post View'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="postViews view large-10 medium-9 columns">
    <h2><?= h($postView->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Post') ?></h6>
            <p><?= $postView->has('post') ? $this->Html->link($postView->post->title, ['controller' => 'Posts', 'action' => 'view', $postView->post->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($postView->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($postView->date) ?></p>
        </div>
    </div>
</div>
