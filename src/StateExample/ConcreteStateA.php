<?php

namespace Webham\DesignPatterns\StateExample;

/**
 * Concrete States implement various behaviors, associated with a state of the
 * Context.
 */
class ConcreteStateA extends State
{
    public function handle1(): void
    {
        echo "ConcreteStateA handles request1. <br>";
        echo "ConcreteStateA wants to change the state of the context. <br>";
        $this->context->transitionTo(new ConcreteStateB);
    }

    public function handle2(): void
    {
        echo "ConcreteStateA handles request2. <br>";
    }
}
