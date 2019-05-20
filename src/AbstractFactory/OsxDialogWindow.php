<?php

namespace Webham\DesignPatterns\AbstractFactory;

use Webham\DesignPatterns\AbstractFactory\DialogWindowInterface;

class OsxDialogWindow implements DialogWindowInterface
{
    public function render(): string
    {
        return "OSX window.";
    }
}
