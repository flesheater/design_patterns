<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\StateExample\Context;
use Webham\DesignPatterns\StateExample\ConcreteStateA;

class StateExampleTest extends TestCase
{
    public function testOneRequestStateChange()
    {
        $context = new Context(new ConcreteStateA);
        $context->request1();

        $this->assertContains(
            'ConcreteStateA handles request1.',
            $this->getActualOutput()
        );
    }

    public function testTwoRequestsStateChange()
    {
        $context = new Context(new ConcreteStateA);
        $context->request1();
        $context->request2();

        $this->assertContains(
            'ConcreteStateA handles request1.',
            $this->getActualOutput()
        );
        $this->assertContains(
            'ConcreteStateB handles request2.',
            $this->getActualOutput()
        );
    }
}

