<?php

namespace Webham\DesignPatterns\StrategyExample;

/**
 * The AlgorighmStrategyInterface interface declares operations common to all supported versions
 * of some algorithm.
 */
interface AlgorithmStrategyInterface
{
    /**
     * Getting the algorithm name.
     */
    public function getName();

    /**
     * Implementing the concrete algorithm.
     */
    public function doAlgorithm(array $data): array;
}
