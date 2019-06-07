<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\CommandExample\Cow;
use Webham\DesignPatterns\CommandExample\EndCommand;
use Webham\DesignPatterns\CommandExample\BatchInvoker;
use Webham\DesignPatterns\CommandExample\CowMilkingCommand;

class CommandExampleTest extends TestCase
{
    public function testCowMilking()
    {
        $batchInvoker = new BatchInvoker;

        $receiver = new Cow(false);
        $batchInvoker->addCommandItem(new CowMilkingCommand($receiver, "Milking cow 1 ..."));

        $receiver2 = new Cow(false);
        $batchInvoker->addCommandItem(new CowMilkingCommand($receiver2, "Milking cow 2 ..."));

        $receiver3 = new Cow(true);
        $batchInvoker->addCommandItem(new CowMilkingCommand($receiver3, "Milking cow 3 ..."));

        $batchInvoker->setOnFinishCommand(new EndCommand("Cleaning arround when finishing ..."));

        $batchInvoker->runBach();

        $this->assertContains(
            'Milking cow 1 ...',
            $this->getActualOutput()
        );

        $this->assertContains(
            'Milking cow 2 ...',
            $this->getActualOutput()
        );

        $this->assertContains(
            'Cow already milked ...',
            $this->getActualOutput()
        );

        $this->assertContains(
            'Cleaning arround when finishing ...',
            $this->getActualOutput()
        );
    }
}
