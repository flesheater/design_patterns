<?php

namespace Webham\DesignPatterns\AbstractFactory;

use Webham\DesignPatterns\AbstractFactory\DialogWindowInterface;
use Webham\DesignPatterns\AbstractFactory\CloseButtonInterface;
use Webham\DesignPatterns\AbstractFactory\OsxDialogWindow;
use Webham\DesignPatterns\AbstractFactory\OsxCloseButton;

class OsxUiAbstractFactory implements UiAbstractFactoryInterface
{
    public function createDialogWindow(): DialogWindowInterface
    {
        return new OsxDialogWindow;
    }

    public function createCloseButton(): CloseButtonInterface
    {
        return new OsxCloseButton;
    }
}
