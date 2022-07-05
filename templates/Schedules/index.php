<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule[]|\Cake\Collection\CollectionInterface $schedules
 */
$identity = $this->request->getAttribute('authentication')->getIdentity();
?>
<div class="schedules index content">
    <?= $this->Html->link(__('New Schedule'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Schedules') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('room_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('reservedTime') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schedules as $schedule): ?>
                <tr>
                    <td><?= $this->Number->format($schedule->id) ?></td>
                    <td><?= $schedule->has('room') ? $this->Html->link($schedule->room->name, ['controller' => 'Rooms', 'action' => 'view', $schedule->room->id]) : '' ?></td>
                    <td><?= $schedule->has('user') ? $this->Html->link($schedule->user->name, ['controller' => 'Users', 'action' => 'view', $schedule->user->id]) : '' ?></td>
                    <td><?= h($schedule->date) ?></td>
                    <td><?= h($schedule->reservedTime) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $schedule->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schedule->id]) ?>
                        <?php if($identity['id'] == $schedule->user->id) : ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id)]) ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
