<?php

namespace Webham\DesignPatterns\DecoratorExample;

use Webham\DesignPatterns\DecoratorExample\BookTitleDecorator;

class BookTitleExclaimDecorator extends BookTitleDecorator {
    function exclaimTitle() {
        $this->title = "!" . $this->title . "!";
    }
}
