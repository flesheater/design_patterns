<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\StrategyExample\SortingContext;
use Webham\DesignPatterns\StrategyExample\SortingAlgorithmStrategyA;
use Webham\DesignPatterns\StrategyExample\SortingAlgorithmStrategyB;

class StrategyExampleTest extends TestCase
{
    /**
     * @group strategy
     */
    public function testSortingWithSortingAlgorithmStrategyA(): void
    {
        print "<h4>Sorting with SortingAlgorithmStrategyA</h4>";
        $context = new SortingContext(new SortingAlgorithmStrategyA);
        $context->setArray(["b", "a", "c", "d", "e"]);
        $this->assertEquals(
            $context->doSorting(),
            implode(",", ['a', 'b', 'c', 'd', 'e'])
        );
    }

        /**
     * @group strategy
     */
    public function testSortingWithSortingAlgorithmStrategyB(): void
    {
        print "<h4>Sorting with SortingAlgorithmStrategyB</h4>";
        $context = new SortingContext(new SortingAlgorithmStrategyB);
        $context->setArray(["b", "a", "c", "d", "e"]);
        $this->assertEquals(
            $context->doSorting(),
            implode(",", ['e', 'd', 'c', 'b', 'a'])
        );
    }
}
