<?php

namespace Webham\DesignPatterns\ObserverExample;

use Webham\DesignPatterns\ObserverExample\SubjectInterface;

interface ObserverInterface
{
    /**
     * Calls a function that would react to a Subject notify.
     */
    public function update(SubjectInterface $subject);
}
