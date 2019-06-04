<?php

namespace Webham\DesignPatterns\IteratorExample;

use Webham\DesignPatterns\IteratorExample\WordsCollection;

/**
 * Concrete Iterators implement various traversal algorithms. These classes
 * store the current traversal position at all times.
 */
class AlphabeticalOrderIterator implements \Iterator
{
    /**
     * @var WordsCollection
     */
    private $collection;

    /**
     * @var int Stores the current traversal position. An iterator may have a
     * lot of other fields for storing iteration state, especially when it is
     * supposed to work with a particular kind of collection.
     */
    private $position = 0;

    /**
     * @var bool This variable indicates the traversal direction.
     */
    private $reverse = false;

    public function __construct(WordsCollection $collection)
    {
        $this->collection = $collection;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position = $this->position + 1;
    }

    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}
