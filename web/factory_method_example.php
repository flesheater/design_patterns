<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\FactoryMethodExample\SingleLionCreatorFactory;
use Webham\DesignPatterns\FactoryMethodExample\MultipleDomesticCatCreatorFactory;
use Webham\DesignPatterns\FactoryMethodExample\SingleDomesticCatCreatorFactory;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
Factory Method

We are having 2 concrete factories that generate
Single Domestic cat and Single Lion.
They are generating DomesticCat or Lion object instances.

==========================
</pre>";


print "Single Domestic cat factory:";
$creator1 = new SingleDomesticCatCreatorFactory;
print $creator1->visualizeOperation();

print "Single Lion factory:";
$creator1 = new SingleLionCreatorFactory;
print $creator1->visualizeOperation();
