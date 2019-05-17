<?php

namespace Webham\DesignPatterns\AbstractFactory;

use Webham\DesignPatterns\AbstractFactory\DialogWindowInterface;
use Webham\DesignPatterns\AbstractFactory\CloseButtonInterface;
use Webham\DesignPatterns\AbstractFactory\WindowsDialogWindow;
use Webham\DesignPatterns\AbstractFactory\WindowsCloseButton;

class WindowsUiAbstractFactory implements UiAbstractFactoryInterface
{
    public function createDialogWindow(): DialogWindowInterface
    {
        return new WindowsDialogWindow;
    }

    public function createCloseButton(): CloseButtonInterface
    {
        return new WindowsCloseButton;
    }
}
