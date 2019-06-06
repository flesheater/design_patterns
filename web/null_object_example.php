<?php

/**
 * @file
 * Glue code.
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\NullObjectExample\DoSomethingService;
use Webham\DesignPatterns\NullObjectExample\NullLogger;
use Webham\DesignPatterns\NullObjectExample\PrintLogger;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
Null Object Pattern

==========================
</pre>";

$service = new DoSomethingService(new NullLogger());
//$this->expectOutputString('');
$service->doSomething();
print "<br>";

$service = new DoSomethingService(new PrintLogger());
//$this->expectOutputString('We are in DesignPatterns\Behavioral\NullObject\Service::doSomething');
$service->doSomething();
print "<br>";
