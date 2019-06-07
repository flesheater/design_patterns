<?php

namespace Webham\DesignPatterns\Test;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\IteratorExample\WordsCollection;

class IteratorExampleTest extends TestCase
{
    protected $collection;

    public function setUp()
    {
        $this->collection = new WordsCollection;
        $this->collection->addItem("First");
        $this->collection->addItem("Second");
        $this->collection->addItem("Third");
    }

    public function testAscIterator()
    {
        $iteratedArray = [];
        foreach ($this->collection->getIterator() as $item) {
            $iteratedArray[] = $item;
        }

        $this->assertEquals(
            $iteratedArray,
            ['First', 'Second', 'Third']
        );
    }

    public function testDescIterator()
    {
        $iteratedArray = [];
        foreach ($this->collection->getReverseIterator() as $item) {
            $iteratedArray[] = $item;
        }

        $this->assertEquals(
            $iteratedArray,
            ['Third', 'Second', 'First']
        );
    }
}
