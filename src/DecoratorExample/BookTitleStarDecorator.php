<?php

namespace Webham\DesignPatterns\DecoratorExample;

use Webham\DesignPatterns\DecoratorExample\BookTitleDecorator;

/**
 * Decorating our Book title with stars.
 */
class BookTitleStarDecorator extends BookTitleDecorator {
    function starTitle() {
        $this->title = Str_replace(" ","*",$this->title);
    }
}
