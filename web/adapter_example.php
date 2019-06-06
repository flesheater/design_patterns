<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\AdapterExample\OrderedStringStorage;
use Webham\DesignPatterns\AdapterExample\ArrayAdapter;
use Webham\DesignPatterns\AdapterExample\SetAdapter;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================


==========================
</pre>";

print "<h2>Do some stuff with Arrays.</h2>";
$storage = new OrderedStringStorage(new ArrayAdapter());
print '<h4>Adding "NumberOne"</h4>';
$storage->addOne('NumberOne');
print '<h4>Adding "NumberTwo"</h4>';
$storage->addOne('NumberTwo');
print '<h4>Adding "NumberTree"</h4>';
$storage->addOne('NumberTree');

print "<h4>Get first one</h4>";
print $storage->getFirst();
print "<h4>Get last one</h4>";
print $storage->getLast();
print "<h4>Get all</h4>";
print_r($storage->getAll());

print "<h2>Do some stuff with Sets.</h2>";
$storage = new OrderedStringStorage(new SetAdapter());
print '<h4>Adding "NumberOneSet"</h4>';
$storage->addOne('NumberOneSet');
print '<h4>Adding "NumberTwoSet"</h4>';
$storage->addOne('NumberTwoSet');
print '<h4>Adding "NumberOneSet"</h4>';
$storage->addOne('NumberOneSet');

print "<h4>Get first one</h4>";
print $storage->getFirst();
print "<h4>Get last one</h4>";
print $storage->getLast();
print "<h4>Get all</h4>";
print_r($storage->getAll());
