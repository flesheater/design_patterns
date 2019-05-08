<?php

namespace Webham\DesignPatterns\ObserverExample;

use Webham\DesignPatterns\ObserverExample\ObserverInterface;

interface SubjectInterface
{
    /**
     * Attach an observer to the subject.
     */
    public function attach(ObserverInterface $observer);

    /**
     * Detach an observer from the subject.
     */
    public function detach(ObserverInterface $observer);

    /**
     * Notify all observers about an event.
     */
    public function notify();
}
