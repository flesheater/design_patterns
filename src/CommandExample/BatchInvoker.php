<?php

namespace Webham\DesignPatterns\CommandExample;

use Webham\DesignPatterns\CommandExample\BatchCommandInterface;

class BatchInvoker
{
    private $onFinishCommand;
    private $processItemCommand;
    private $items;

    public function setOnFinishCommand(BatchCommandInterface $command)
    {
        $this->onFinishCommand = $command;
    }
    public function setProcessItemCoammand(BatchCommandInterface $command)
    {
        $this->processItemCommand = $command;
    }
    public function addCommandItem($item)
    {
        $this->items[] = $item;
    }

    public function runBach(): void
    {
        foreach ($this->items as $item) {
            $item->execute();
        }
        $this->onFinishCommand->execute();
    }
}
