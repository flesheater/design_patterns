<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\StrategyExample\SortingContext;
use Webham\DesignPatterns\StrategyExample\SortingAlgorithmStrategyA;
use Webham\DesignPatterns\StrategyExample\SortingAlgorithmStrategyB;


/**
 * The client code picks a concrete strategy and passes it to the context. The
 * client should be aware of the differences between strategies in order to make
 * the right choice.
 */
$context = new SortingContext(new SortingAlgorithmStrategyA);
$context->setArray(["b", "a", "c", "d", "e"]);
$context->doSorting();

print "<br>\n";

$context->setStrategy(new SortingAlgorithmStrategyB);
$context->doSorting();
