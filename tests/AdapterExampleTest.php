<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\AdapterExample\SetAdapter;
use Webham\DesignPatterns\AdapterExample\ArrayAdapter;
use Webham\DesignPatterns\AdapterExample\OrderedStringStorage;

/**
 * Test
 */
class AdapterExampleTest extends TestCase
{
    /**
     * Testing the adapter of the array.
     *
     * @group adapter
     */
    public function testAdaptingArray()
    {
        $storage = new OrderedStringStorage(new ArrayAdapter());
        $storage->addOne('NumberOne');
        $storage->addOne('NumberTwo');
        $storage->addOne('NumberTree');

        
        $this->assertEquals($storage->getFirst(), 'NumberOne');
        $this->assertEquals($storage->getLast(), 'NumberTree');
        $this->assertEquals(
            $storage->getAll(),
            ['NumberOne', 'NumberTwo', 'NumberTree']
        );
    }

    /**
     * Testing the Adapter implementation with sets.
     *
     * @group adapter
     */
    public function testAdaptingSet()
    {
        print "<h2>Do some stuff with Arrays.</h2>";
        $storage = new OrderedStringStorage(new SetAdapter());
        $storage->addOne('NumberOne');
        $storage->addOne('NumberTwo');
        $storage->addOne('NumberTree');

        $this->assertEquals($storage->getFirst(), 'NumberOne');
        $this->assertEquals($storage->getLast(), 'NumberTree');
        $this->assertEquals(
            $storage->getAll(),
            ['NumberOne', 'NumberTwo', 'NumberTree']
        );
    }
}
