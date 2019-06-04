<?php

/**
 * @file
 * Glue code.
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\IteratorExample\WordsCollection;

print '<a href="/">back</a>';
print "
<pre>
==========================
Iterator Pattern.
</pre>";

/**
 * The client code may or may not know about the Concrete Iterator or Collection
 * classes, depending on the level of indirection you want to keep in your
 * program.
 */
$collection = new WordsCollection;
$collection->addItem("First");
$collection->addItem("Second");
$collection->addItem("Third");

print "Straight traversal:<br>";
foreach ($collection->getIterator() as $item) {
    print $item . "<br>";
}

print "<br>";
print "Reverse traversal:<br>";
foreach ($collection->getReverseIterator() as $item) {
    print $item . "<br>";
}
