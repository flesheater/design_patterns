<?php

namespace Webham\DesignPatterns\CommandExample;

use Webham\DesignPatterns\CommandExample\BatchCommandInterface;
use Webham\DesignPatterns\CommandExample\CowReceiverInterface;

class CowMilkingCommand implements BatchCommandInterface
{
    private $cowReceiver;
    private $activity;

    public function __construct(CowReceiverInterface $cowReceiver, string $activity)
    {
        $this->cowReceiver = $cowReceiver;
        $this->activity = $activity;
    }

    public function execute()
    {
        print $this->activity;
        if (!$this->cowReceiver->isMilked()) {
            print "<i>Milking ...</i><br>";
            $this->cowReceiver->milkCow();
            return;
        }
        print "<i>Cow already milked ...</i><br>";
    }
}
