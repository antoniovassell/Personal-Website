<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Message'), ['action' => 'edit', $message->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="messages view large-10 medium-9 columns">
    <h2><?= h($message->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($message->name) ?></p>
            <h6 class="subheader"><?= __('Email Address') ?></h6>
            <p><?= h($message->email_address) ?></p>
            <h6 class="subheader"><?= __('Website') ?></h6>
            <p><?= h($message->website) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($message->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($message->date) ?></p>
            <h6 class="subheader"><?= __('Date Read') ?></h6>
            <p><?= h($message->date_read) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Read') ?></h6>
            <p><?= $message->read ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Message') ?></h6>
            <?= $this->Text->autoParagraph(h($message->message)); ?>

        </div>
    </div>
</div>
