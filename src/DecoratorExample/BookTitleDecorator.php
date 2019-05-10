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

    /**
     * Resetting the title to the original.
     */
    function resetTitle() {
        $this->title = $this->book->getTitle();
    }

    /**
     * Showing the title.
     */
    function showTitle() {
        return $this->title;
    }
}
