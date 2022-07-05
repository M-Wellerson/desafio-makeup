<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Schedule;
use Authorization\IdentityInterface;

/**
 * Schedule policy
 */
class SchedulePolicy
{
    /**
     * Check if $user can create Schedule
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Schedule $schedule
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Schedule $schedule)
    {
        return true;
    }

    public function canIndex(IdentityInterface $user, Schedule $schedule)
    {
        return true;
    }

    /**
     * Check if $user can update Schedule
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Schedule $schedule
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Schedule $schedule)
    {
        return true;
    }

    /**
     * Check if $user can delete Schedule
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Schedule $schedule
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Schedule $schedule)
    {
        return true;
    }

    /**
     * Check if $user can view Schedule
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Schedule $schedule
     * @return bool
     */
    public function canView(IdentityInterface $user, Schedule $schedule)
    {
        return true;
    }
}
