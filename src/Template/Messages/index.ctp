<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="messages index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('email_address') ?></th>
            <th><?= $this->Paginator->sort('website') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('date_read') ?></th>
            <th><?= $this->Paginator->sort('read') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($messages as $message): ?>
        <tr>
            <td><?= $this->Number->format($message->id) ?></td>
            <td><?= h($message->name) ?></td>
            <td><?= h($message->email_address) ?></td>
            <td><?= h($message->website) ?></td>
            <td><?= h($message->date) ?></td>
            <td><?= h($message->date_read) ?></td>
            <td><?= h($message->read) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $message->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $message->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id)]) ?>
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
