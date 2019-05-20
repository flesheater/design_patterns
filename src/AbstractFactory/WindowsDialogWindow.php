<?php

namespace Webham\DesignPatterns\AbstractFactory;

use Webham\DesignPatterns\AbstractFactory\DialogWindowInterface;

class WindowsDialogWindow implements DialogWindowInterface
{
    public function render(): string
    {
        return "Windows window.";
    }
}
