<?php

namespace Webham\DesignPatterns\AbstractFactory;

use Webham\DesignPatterns\AbstractFactory\DialogWindowInterface;

class OsxCloseButton implements CloseButtonInterface
{
    public function render(): string
    {
        return "Osx close button.";
    }

    public function close(DialogWindowInterface $window): string
    {
        return "Closing ({$window->render()}) ...";
    }
}
