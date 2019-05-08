<?php

namespace Webham\DesignPatterns\ObserverExample;

use Webham\DesignPatterns\ObserverExample\SubjectInterface;

/**
 * Reacts to Subject state with a value less than 3.
 */
class ConcreteObserverA implements ObserverInterface
{
    /**
     * {@inheritdoc}
     */
    public function update(SubjectInterface $subject): void
    {
        if ($subject->state < 3) {
            echo "<i>ConcreteObserverA: Reacted to the event.\n</i><br>";
        }
    }
}
