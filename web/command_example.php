<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\CommandExample\BatchInvoker;
use Webham\DesignPatterns\CommandExample\Cow;
use Webham\DesignPatterns\CommandExample\CowMilkingCommand;
use Webham\DesignPatterns\CommandExample\EndCommand;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
Command Pattern
==========================
</pre>";

$batchInvoker = new BatchInvoker;

$receiver = new Cow(false);
$batchInvoker->addCommandItem(new CowMilkingCommand($receiver, "Milking cow 1 ..."));

$receiver2 = new Cow(false);
$batchInvoker->addCommandItem(new CowMilkingCommand($receiver2, "Milking cow 2 ..."));

$receiver3 = new Cow(true);
$batchInvoker->addCommandItem(new CowMilkingCommand($receiver3, "Milking cow 3 ..."));

$batchInvoker->setOnFinishCommand(new EndCommand("Cleaning arround when finishing ..."));

$batchInvoker->runBach();
