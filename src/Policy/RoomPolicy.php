<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Room;
use Authorization\IdentityInterface;

/**
 * Room policy
 */
class RoomPolicy
{
    /**
     * Check if $user can create Room
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Room $room
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Room $room)
    {
        if($user['role'] == 'admin'){
            return true;
        }
        return false;
    }

    /**
     * Check if $user can update Room
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Room $room
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Room $room)
    {
        if($user['role'] == 'admin'){
            return true;
        }
        return false;
    }

    /**
     * Check if $user can delete Room
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Room $room
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Room $room)
    {
        if($user['role'] == 'admin'){
            return true;
        }
        return false;
    }

    /**
     * Check if $user can view Room
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Room $room
     * @return bool
     */
    public function canView(IdentityInterface $user, Room $room)
    {
        return true;
    }
}
