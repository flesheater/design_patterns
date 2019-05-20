<?php

namespace Webham\DesignPatterns\AbstractFactory;

use Webham\DesignPatterns\AbstractFactory\DialogWindowInterface;

interface CloseButtonInterface
{

    public function render(): string;

    public function close(DialogWindowInterface $window): string;
}
