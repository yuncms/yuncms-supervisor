<?php

namespace yuncms\supervisor\tests\components\supervisor;

use yuncms\supervisor\components\supervisor\Connection;
use yuncms\supervisor\components\supervisor\Supervisor;

class SupervisorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject | Supervisor
     */
    protected $supervisor;

    public function setUp()
    {
        $connection = $this->getMockBuilder(Connection::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->supervisor = $this->getMock(
            Supervisor::class, null, [$connection]
        );
    }

    public function testConfigChangedEvent()
    {
        $this->assertInternalType(
            'int', $this->supervisor->configChangedEvent()
        );
    }
}