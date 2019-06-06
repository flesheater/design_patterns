<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\StateExample\Context;
use Webham\DesignPatterns\StateExample\ConcreteStateA;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
State Pattern Example

==========================
</pre>";

/**
 * The client code.
 */
$context = new Context(new ConcreteStateA);
$context->request1();
$context->request2();
