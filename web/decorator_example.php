<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\DecoratorExample\Book;
use Webham\DesignPatterns\DecoratorExample\BookTitleExclaimDecorator;
use Webham\DesignPatterns\DecoratorExample\BookTitleStarDecorator;


/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================


==========================
</pre>";

$patternBook = new Book('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');
$starDecoratedTitleBook = new BookTitleStarDecorator($patternBook);
$exclaimDecoratedTitleBook = new BookTitleExclaimDecorator($patternBook);

//print $decorator->showTitle();
print '<h5>Exclaim Decorated title:</h5>';
$exclaimDecoratedTitleBook->exclaimTitle();
print $exclaimDecoratedTitleBook->showTitle();

print '<h5>Star Decorated title:</h5>';
$starDecoratedTitleBook->starTitle();
print $starDecoratedTitleBook->showTitle();

print '<h5>Reverted title:</h5>';
$starDecoratedTitleBook->resetTitle();
print $starDecoratedTitleBook->showTitle();
