<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\ObserverExample\Subject;
use Webham\DesignPatterns\ObserverExample\ConcreteObserverA;
use Webham\DesignPatterns\ObserverExample\ConcreteObserverB;

class ObserverExampleTest extends TestCase
{
    private $subject;
    private $o1;
    private $o2;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->subject = new Subject();
        $this->o1 = new ConcreteObserverA();
        $this->o2 = new ConcreteObserverB();
    }
    /**
     * @group observer
     */
    public function testConcreteObserverAReaction()
    {
        $o1 = new ConcreteObserverA();
        $this->subject->attach($this->o1);
        $this->subject->someBusinessLogic();
        $this->expectOutputString('Subject: Attached an observer.\n
        + <br>Subject: My state has just changed.<br>Subject: Notifying observers...\n
        + <br><i>ConcreteObserverA: Reacted to the event.</i><br>x');
    }

    /**
     * @group observer
     */
    public function testConcreteObserverABReaction()
    {
        $this->subject->attach($this->o1);
        $this->subject->attach($this->o2);
        $this->subject->someBusinessLogic();
        $this->expectOutputString('Subject: Attached an observer.\n
        + <br>Subject: Attached an observer.\n
        + <br>Subject: My state has just changed.<br>Subject: Notifying observers...\n
        + <br><i>ConcreteObserverA: Reacted to the event.</i><br><i>ConcreteObserverB: Reacted to the event.</i><br>');
    }
}
