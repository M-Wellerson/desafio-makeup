<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\RoomsHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\RoomsHelper Test Case
 */
class RoomsHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\RoomsHelper
     */
    protected $Rooms;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Rooms = new RoomsHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Rooms);

        parent::tearDown();
    }
}
