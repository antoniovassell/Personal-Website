<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tagged'), ['action' => 'edit', $tagged->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tagged'), ['action' => 'delete', $tagged->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagged->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tagged'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tagged'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tagged view large-10 medium-9 columns">
    <h2><?= h($tagged->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($tagged->id) ?></p>
            <h6 class="subheader"><?= __('Foreign Key') ?></h6>
            <p><?= h($tagged->foreign_key) ?></p>
            <h6 class="subheader"><?= __('Tag') ?></h6>
            <p><?= $tagged->has('tag') ? $this->Html->link($tagged->tag->name, ['controller' => 'Tags', 'action' => 'view', $tagged->tag->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Model') ?></h6>
            <p><?= h($tagged->model) ?></p>
            <h6 class="subheader"><?= __('Language') ?></h6>
            <p><?= h($tagged->language) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Times Tagged') ?></h6>
            <p><?= $this->Number->format($tagged->times_tagged) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($tagged->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($tagged->modified) ?></p>
        </div>
    </div>
</div>
