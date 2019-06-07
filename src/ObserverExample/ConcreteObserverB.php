<?php

namespace Webham\DesignPatterns\ObserverExample;

use Webham\DesignPatterns\ObserverExample\SubjectInterface;

/**
 * Reacts to Subject state with a value equal to 0 or more or equal to 2.
 */
class ConcreteObserverB implements ObserverInterface
{
    /**
     * {@inheritdoc}
     */
    public function update(SubjectInterface $subject): void
    {
            print "<i>ConcreteObserverB: Reacted to the event.</i><br>";
    }
}
