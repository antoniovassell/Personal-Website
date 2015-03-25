<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tagged'), ['controller' => 'Tagged', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tagged'), ['controller' => 'Tagged', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tags index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('identifier') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('keyname') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('occurrence') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tags as $tag): ?>
        <tr>
            <td><?= h($tag->id) ?></td>
            <td><?= h($tag->identifier) ?></td>
            <td><?= h($tag->name) ?></td>
            <td><?= h($tag->keyname) ?></td>
            <td><?= h($tag->created) ?></td>
            <td><?= h($tag->modified) ?></td>
            <td><?= $this->Number->format($tag->occurrence) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tag->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tag->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
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
