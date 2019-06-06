<?php

/**
 * @file
 * Glue code.
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\StrategyExample\SortingContext;
use Webham\DesignPatterns\StrategyExample\SortingAlgorithmStrategyA;
use Webham\DesignPatterns\StrategyExample\SortingAlgorithmStrategyB;

print '<a href="/">back</a>';
print "
<pre>
==========================
Strategy.

We have a SortingContext class to which we are passing different
SortingAlgorithmStrategy classes (SortingAlgorithmStrategyA and SortingAlgorithmStrategyB that implement 
AlgorithmStrategyInterface). Each of them has a different sorting algorithm.

This way as we need a new sorting implementation we just create a new sorting algorithm and
pass it to the SortingContext class.
==========================
</pre>";

print "<h4>Sorting with SortingAlgorithmStrategyA</h4>";
$context = new SortingContext(new SortingAlgorithmStrategyA);
$context->setArray(["b", "a", "c", "d", "e"]);
$context->doSorting();

print "<h4>Sorting with SortingAlgorithmStrategyB</h4>";
$context->setStrategy(new SortingAlgorithmStrategyB);
$context->doSorting();
