<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 * @var string[]|\Cake\Collection\CollectionInterface $rooms
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
$identity = $this->request->getAttribute('authentication')->getIdentity();
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schedule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Schedules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schedules form content">
            <?= $this->Form->create($schedule) ?>
            <fieldset>
                <legend><?= __('Edit Schedule') ?></legend>
                <?php
                    echo $this->Form->control('date', ['type' => 'hidden', 'value' => date("Y-m-d")]);
                    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => $identity['id']]);
                    echo $this->Form->control('room_id', [
                        'type' => 'select',
                        'options' => $rooms,
                    ]);
                    echo $this->Form->control('reservedTime', [
                        'type' => 'select',
                        'options' => [
                            '09|10' => '09:00:00 ás 10:00:00',
                            '10|11' => '10:00:00 ás 11:00:00',
                            '11|12' => '11:00:00 ás 12:00:00',
                            '12|13' => '12:00:00 ás 13:00:00',
                            '13|14' => '13:00:00 ás 14:00:00',
                            '14|15' => '14:00:00 ás 15:00:00',
                            '15|16' => '15:00:00 ás 16:00:00',
                            '16|17' => '16:00:00 ás 15:00:00'
                        ],
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
