<?php

namespace Webham\DesignPatterns\DecoratorExample;

use Webham\DesignPatterns\DecoratorExample\BookTitleDecorator;

class BookTitleStarDecorator extends BookTitleDecorator
{
    public function starTitle()
    {
        $this->title = Str_replace(" ", "*", $this->title);
    }
}
