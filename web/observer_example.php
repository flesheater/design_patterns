<?php

/**
 * @file
 * Glue code.
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\ObserverExample\Subject;
use Webham\DesignPatterns\ObserverExample\ConcreteObserverA;
use Webham\DesignPatterns\ObserverExample\ConcreteObserverB;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
We have the Subject class that is the Observe (it could be observed).
ConcreteObserverA and ConcreteObserverB are the Observers
that we attach to our Observe.
All the attached observers are called when we execute our sumeBusinessLogic
method.

==========================
</pre>";

$subject = new Subject();

$o1 = new ConcreteObserverA();
$o2 = new ConcreteObserverB();
print '<h3>Testing with 2 observers</h3>';
$subject->attach($o1);
$subject->attach($o2);
$subject->someBusinessLogic();

print '<h3>Testing with one observer</h3>';
$subject->detach($o2);
print_r($subject->someBusinessLogic());
