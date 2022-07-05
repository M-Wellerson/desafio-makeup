<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Schedule Entity
 *
 * @property int $id
 * @property int $room_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string $reservedTime
 *
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\User $user
 */
class Schedule extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'room_id' => true,
        'user_id' => true,
        'date' => true,
        'reservedTime' => true,
        'room' => true,
        'user' => true,
    ];
}
