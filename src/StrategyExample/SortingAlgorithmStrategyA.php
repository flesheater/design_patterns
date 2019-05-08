<?php

namespace Webham\DesignPatterns\StrategyExample;

use Webham\DesignPatterns\StrategyExample\AlgorithmStrategyInterface;

/**
 * Sorting our array ascending.
 */
class SortingAlgorithmStrategyA implements AlgorithmStrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName() {
      return "StrategyA";
    }

    /**
     * The actual ascending sort.
     */
    public function doAlgorithm(array $data): array
    {
      sort($data);
      return $data;
    }
}
