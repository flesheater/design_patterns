<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\FacadeExample\TitlePrefixer;
use Webham\DesignPatterns\FacadeExample\TitleSuffixer;
use Webham\DesignPatterns\FacadeExample\TitleFacade;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
Facade Design Pattern
We have a general facade class TitleFacade. To it are injected with Dependency Injection
two classes with certain logic. Their logic is then implemented in the TitleFacade class in the
operation() method.

==========================
</pre>";

$subsystem1 = new TitlePrefixer;
$subsystem2 = new TitleSuffixer;
$titleFacade = new TitleFacade($subsystem1, $subsystem2);
$titleFacade->setTitle('I am Spartacus!');
print $titleFacade->operation();
