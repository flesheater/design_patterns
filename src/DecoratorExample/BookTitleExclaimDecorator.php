<?php

namespace Webham\DesignPatterns\DecoratorExample;

use Webham\DesignPatterns\DecoratorExample\BookTitleDecorator;

/**
 * Decorating our Book title with exclamation.
 */
class BookTitleExclaimDecorator extends BookTitleDecorator {
    function exclaimTitle() {
        $this->title = "!" . $this->title . "!";
    }
}
