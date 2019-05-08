<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\ObserverExample\Subject;
use Webham\DesignPatterns\ObserverExample\ConcreteObserverA;
use Webham\DesignPatterns\ObserverExample\ConcreteObserverB;


/**
 * The client code.
 */

print "
<pre>
We have the Subject class that is the Observe.
ConcreteObserverA and ConcreteObserverB are the Observers
that we attached to our Observe.
All the attached observers are called when we execute our sumeBusinessLogic
method.

==========================
</pre>";

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();
