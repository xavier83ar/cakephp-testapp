<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->input('username', ['label' => __('Username (jhondoe)')]) ?>
        <?= $this->Form->input('password', ['label' => __('Password (123123)')]) ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>
