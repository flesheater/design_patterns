<?php

namespace Webham\DesignPatterns\StrategyExample;

use Webham\DesignPatterns\StrategyExample\AlgorithmStrategyInterface;

/**
 * The AlgorithmContext defines the interface of interest to clients.
 */
class SortingContext
{
    /**
     * @var AlgorithmStrategyInterface The Context maintains a reference to one of the Strategy
     * objects. The Context does not know the concrete class of a strategy. It
     * should work with all strategies via the Strategy interface.
     */
    private $algorighmStrategy;
    private $array;

    /**
     * Usually, the Context accepts a strategy through the constructor, but also
     * provides a setter to change it at runtime.
     */
    public function __construct(AlgorithmStrategyInterface $strategy)
    {
        $this->setStrategy($strategy);
    }

    /**
     * Setting the array that we are going to be sorting.
     */
    public function setArray(array $array)
    {
        $this->array = $array;
    }

    /**
     * Usually, the Context allows replacing a Strategy object at runtime.
     */
    public function setStrategy(AlgorithmStrategyInterface $strategy)
    {
        $this->algorighmStrategy = $strategy;
    }

    /**
     * The Context delegates some work to the Strategy object instead of
     * implementing multiple versions of the algorithm on its own.
     */
    public function doSorting(): string
    {
        $result = $this->algorighmStrategy->doAlgorithm($this->array);
        return implode(",", $result);
    }

    /**
     * Pronouncing the sorting.
     */
    public function pronounceSorting(): void
    {
        print "Context: Doing sorting with <strong>" . $this->algorighmStrategy->getName() . '</strong><br>';
    }
}
