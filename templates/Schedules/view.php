<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Schedule'), ['action' => 'edit', $schedule->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Schedule'), ['action' => 'delete', $schedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Schedules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Schedule'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schedules view content">
            <h3><?= h($schedule->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= $schedule->has('room') ? $this->Html->link($schedule->room->name, ['controller' => 'Rooms', 'action' => 'view', $schedule->room->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $schedule->has('user') ? $this->Html->link($schedule->user->name, ['controller' => 'Users', 'action' => 'view', $schedule->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('ReservedTime') ?></th>
                    <td><?= h($schedule->reservedTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($schedule->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($schedule->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
