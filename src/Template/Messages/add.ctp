<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="messages form large-10 medium-9 columns">
    <?= $this->Form->create($message); ?>
    <fieldset>
        <legend><?= __('Add Message') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email_address');
            echo $this->Form->input('website');
            echo $this->Form->input('message');
            echo $this->Form->input('date');
            echo $this->Form->input('date_read');
            echo $this->Form->input('read');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
