<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Tagged'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tagged form large-10 medium-9 columns">
    <?= $this->Form->create($tagged); ?>
    <fieldset>
        <legend><?= __('Add Tagged') ?></legend>
        <?php
            echo $this->Form->input('foreign_key');
            echo $this->Form->input('tag_id', ['options' => $tags]);
            echo $this->Form->input('model');
            echo $this->Form->input('language');
            echo $this->Form->input('times_tagged');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
