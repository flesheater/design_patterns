<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\NullObjectExample\DoSomethingService;
use Webham\DesignPatterns\NullObjectExample\NullLogger;
use Webham\DesignPatterns\NullObjectExample\PrintLogger;

/**
 * Testing the Null Object.
 */
class NullObjectExampleTest extends TestCase
{
    /**
     * @group null_object
     */
    public function testPrintLogger(): void
    {
        $service = new DoSomethingService(new PrintLogger());
        $service->doSomething();
        $this->expectOutputString('We are in Webham\DesignPatterns\NullObjectExample\DoSomethingService::doSomething');
    }

    /**
     * @group null_object
     */
    public function testNullLogger(): void
    {
        $service = new DoSomethingService(new NullLogger());
        $service->doSomething();
        $this->expectOutputString('');
    }
}
