<?php

namespace Webham\DesignPatterns\DecoratorExample;

class Book {
    private $author;
    private $title;

    function __construct($author_in, $title_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }

    function getAuthor() {
        return $this->author;
    }

    function getTitle() {
        return $this->title;
    }

    function getAuthorAndTitle() {
      return $this->getTitle().' by '.$this->getAuthor();
    }
}
