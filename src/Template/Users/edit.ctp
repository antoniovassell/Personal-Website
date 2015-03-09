<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user); ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('slug');
            echo $this->Form->input('password');
            echo $this->Form->input('password_token');
            echo $this->Form->input('email');
            echo $this->Form->input('email_verified');
            echo $this->Form->input('email_token');
            echo $this->Form->input('email_token_expires');
            echo $this->Form->input('tos');
            echo $this->Form->input('active');
            echo $this->Form->input('last_login');
            echo $this->Form->input('last_action');
            echo $this->Form->input('is_admin');
            echo $this->Form->input('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
