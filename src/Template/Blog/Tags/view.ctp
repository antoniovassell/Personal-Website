<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tagged'), ['controller' => 'Tagged', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tagged'), ['controller' => 'Tagged', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tags view large-10 medium-9 columns">
    <h2><?= h($tag->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($tag->id) ?></p>
            <h6 class="subheader"><?= __('Identifier') ?></h6>
            <p><?= h($tag->identifier) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($tag->name) ?></p>
            <h6 class="subheader"><?= __('Keyname') ?></h6>
            <p><?= h($tag->keyname) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Occurrence') ?></h6>
            <p><?= $this->Number->format($tag->occurrence) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($tag->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($tag->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Tagged') ?></h4>
    <?php if (!empty($tag->tagged)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Foreign Key') ?></th>
            <th><?= __('Tag Id') ?></th>
            <th><?= __('Model') ?></th>
            <th><?= __('Language') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Times Tagged') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tag->tagged as $tagged): ?>
        <tr>
            <td><?= h($tagged->id) ?></td>
            <td><?= h($tagged->foreign_key) ?></td>
            <td><?= h($tagged->tag_id) ?></td>
            <td><?= h($tagged->model) ?></td>
            <td><?= h($tagged->language) ?></td>
            <td><?= h($tagged->created) ?></td>
            <td><?= h($tagged->modified) ?></td>
            <td><?= h($tagged->times_tagged) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tagged', 'action' => 'view', $tagged->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tagged', 'action' => 'edit', $tagged->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tagged', 'action' => 'delete', $tagged->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagged->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
