<?php

namespace Webham\DesignPatterns\DecoratorExample;

use Webham\DesignPatterns\DecoratorExample\Book;

abstract class BookTitleDecorator
{
    protected $book;
    protected $title;
    public function __construct(Book $book_in)
    {
        $this->book = $book_in;
        $this->resetTitle();
    }

    public function resetTitle()
    {
        $this->title = $this->book->getTitle();
    }

    public function showTitle()
    {
        return $this->title;
    }
}
