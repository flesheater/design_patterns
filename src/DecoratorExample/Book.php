<?php

namespace Webham\DesignPatterns\DecoratorExample;

/**
 * Our book class.
 */
class Book {
    private $author;
    private $title;

    /**
     * Creating the book.
     */
    function __construct($title_in, $author_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }

    /**
     * Author getter.
     */
    function getAuthor() {
        return $this->author;
    }

    /**
     * Title getter.
     */
    function getTitle() {
        return $this->title;
    }

    /**
     * Autor and title getter.
     */
    function getAuthorAndTitle() {
      return $this->getTitle().' by '.$this->getAuthor();
    }
}
