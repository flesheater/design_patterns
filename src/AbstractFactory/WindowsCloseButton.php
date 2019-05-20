<?php

namespace Webham\DesignPatterns\AbstractFactory;

use Webham\DesignPatterns\AbstractFactory\CloseButtonInterface;
use Webham\DesignPatterns\AbstractFactory\DialogWindowInterface;

class WindowsCloseButton implements CloseButtonInterface
{
    public function render(): string
    {
        return "Windows close button.";
    }

    public function close(DialogWindowInterface $window): string
    {
        return "Closing ({$window->render()}) ...";
    }
}
