<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Room'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rooms view content">
            <h3><?= h($room->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($room->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($room->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($room->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($room->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Schedules') ?></h4>
                <?php if (!empty($room->schedules)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Room Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('StartTime') ?></th>
                            <th><?= __('EndTime') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($room->schedules as $schedules) : ?>
                        <tr>
                            <td><?= h($schedules->room_id) ?></td>
                            <td><?= h($schedules->user_id) ?></td>
                            <td><?= h($schedules->date) ?></td>
                            <td><?= h($schedules->startTime) ?></td>
                            <td><?= h($schedules->endTime) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Schedules', 'action' => 'view', $schedules->room_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Schedules', 'action' => 'edit', $schedules->room_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Schedules', 'action' => 'delete', $schedules->room_id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedules->room_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
