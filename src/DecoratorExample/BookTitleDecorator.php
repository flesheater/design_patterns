<?php

namespace Webham\DesignPatterns\DecoratorExample;

use Webham\DesignPatterns\DecoratorExample\Book;

abstract class BookTitleDecorator {
    protected $book;
    protected $title;
    public function __construct(Book $book_in) {
        $this->book = $book_in;
        $this->resetTitle();
    }

    function resetTitle() {
        $this->title = $this->book->getTitle();
    }

    function showTitle() {
        return $this->title;
    }
}
