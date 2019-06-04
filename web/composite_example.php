<?php

/**
 * @file
 * Glue code.
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\CompositeExample\BranchComposite;
use Webham\DesignPatterns\CompositeExample\Leaf;

print '<a href="/">back</a>';
print "
<pre>
==========================
Composite example.

</pre>";

/**
 * This way the client code can support the simple leaf components...
 */
$simple = new Leaf;
print "Client: I've got a simple component:<br>";
print "operation on: " . $simple->operation();

/**
 * ...as well as the complex BranchComposites.
 */
$tree = new BranchComposite;
$branch1 = new BranchComposite;
$branch1->add(new Leaf);
$branch1->add(new Leaf);
$branch2 = new BranchComposite;
$branch2->add(new Leaf);
$tree->add($branch1);
$tree->add($branch2);
print "<br>Client: Now I've got a BranchComposite tree:<br>";
print "operation on: " . $simple->operation();
