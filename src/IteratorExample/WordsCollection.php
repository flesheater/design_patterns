<?php

namespace Webham\DesignPatterns\IteratorExample;

use Webham\DesignPatterns\IteratorExample\AlphabeticalOrderIterator;
use Webham\DesignPatterns\IteratorExample\AlphabeticalReverseOrderIterator;

/**
 * Concrete Collections provide one or several methods for retrieving fresh
 * iterator instances, compatible with the collection class.
 */
class WordsCollection implements \IteratorAggregate
{
    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator(): \Iterator
    {
        return new  AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator(): \Iterator
    {
        return new AlphabeticalReverseOrderIterator($this);
    }
}
