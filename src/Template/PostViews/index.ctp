<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Post View'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="postViews index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('post_id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($postViews as $postView): ?>
        <tr>
            <td><?= $this->Number->format($postView->id) ?></td>
            <td>
                <?= $postView->has('post') ? $this->Html->link($postView->post->title, ['controller' => 'Posts', 'action' => 'view', $postView->post->id]) : '' ?>
            </td>
            <td><?= h($postView->date) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $postView->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $postView->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $postView->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postView->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
