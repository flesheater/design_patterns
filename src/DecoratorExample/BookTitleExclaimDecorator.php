<?php

namespace Webham\DesignPatterns\DecoratorExample;

use Webham\DesignPatterns\DecoratorExample\BookTitleDecorator;

class BookTitleExclaimDecorator extends BookTitleDecorator
{
    public function exclaimTitle()
    {
        $this->title = "!" . $this->title . "!";
    }
}
