<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($user->id) ?></p>
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($user->slug) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Password Token') ?></h6>
            <p><?= h($user->password_token) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Email Token') ?></h6>
            <p><?= h($user->email_token) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= h($user->role) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Email Token Expires') ?></h6>
            <p><?= h($user->email_token_expires) ?></p>
            <h6 class="subheader"><?= __('Last Login') ?></h6>
            <p><?= h($user->last_login) ?></p>
            <h6 class="subheader"><?= __('Last Action') ?></h6>
            <p><?= h($user->last_action) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Email Verified') ?></h6>
            <p><?= $user->email_verified ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Tos') ?></h6>
            <p><?= $user->tos ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Active') ?></h6>
            <p><?= $user->active ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Is Admin') ?></h6>
            <p><?= $user->is_admin ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
