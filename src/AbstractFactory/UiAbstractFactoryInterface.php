<?php

namespace Webham\DesignPatterns\AbstractFactory;

use Webham\DesignPatterns\AbstractFactory\DialogWindowInterface;
use Webham\DesignPatterns\AbstractFactory\CloseButtonInterface;

interface UiAbstractFactoryInterface
{
    public function createDialogWindow(): DialogWindowInterface;

    public function createCloseButton(): CloseButtonInterface;
}
