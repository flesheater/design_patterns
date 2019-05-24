<?php

namespace Webham\DesignPatterns\CommandExample;

use Webham\DesignPatterns\CommandExample\BatchCommandInterface;

class EndCommand implements BatchCommandInterface
{
    private $activity;

    public function __construct(string $activity)
    {
        $this->activity = $activity;
    }

    public function execute()
    {
        print $this->activity . "<br>";
    }
}
