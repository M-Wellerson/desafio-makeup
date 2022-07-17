<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->loadHelper('Authentication.Identity');
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?php if ($this->Identity->isLoggedIn()) : ?>
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?php endif; ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                $role = $this->Identity->isLoggedIn() ? ['admin' => 'Admin', 'user' => 'User'] : ['user' => 'User'];

                echo $this->Form->control('email');
                echo $this->Form->control('name');
                echo $this->Form->control('password');
                echo $this->Form->control('role', [
                    'type' => 'select',
                    'options' => $role,
                    'default' => 'user'
                ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>