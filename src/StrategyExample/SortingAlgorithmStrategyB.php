<?php

namespace Webham\DesignPatterns\StrategyExample;

use Webham\DesignPatterns\StrategyExample\AlgorithmStrategyInterface;

/**
 *  Sort an array in reverse order.
 */
class SortingAlgorithmStrategyB implements AlgorithmStrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName() {
      return "StrategyB";
    }

    /**
     * Reverse sorting our array.
     */
    public function doAlgorithm(array $data): array
    {
      rsort($data);
      return $data;
    }
}
