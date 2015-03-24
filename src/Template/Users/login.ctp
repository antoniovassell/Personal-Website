<?php $this->layout = 'login'; ?>

<div class="login-box">
    <div class="login-logo">
        <a href="/"><?= \Cake\Core\Configure::read('App.name'); ?></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?= $this->Form->create(); ?>
        <?= $this->Form->input('username'); ?>
        <?= $this->Form->input('password'); ?>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger btn-block']); ?>
        <?= $this->Form->end(); ?>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
