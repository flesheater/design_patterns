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
Decorator Pattern Example
We have a Book class that has a title. We have two title decorator classes.
One that decorates the Book title with exclaimation marks and one that
decorates the Book title with stars. As we instantiate our decorators - we pass
the book and then we have additional method that could decorate the title and
make it look a bit fancier.

==========================
</pre>";

$patternBook = new Book('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');

print '<h5>Exclaim Decorated title:</h5>';
$exclaimDecoratedTitleBook = new BookTitleExclaimDecorator($patternBook);
$exclaimDecoratedTitleBook->exclaimTitle();
print $exclaimDecoratedTitleBook->showTitle();

print '<h5>Star Decorated title:</h5>';
$starDecoratedTitleBook = new BookTitleStarDecorator($patternBook);
$starDecoratedTitleBook->starTitle();
print $starDecoratedTitleBook->showTitle();

print '<h5>Reverted title:</h5>';
$starDecoratedTitleBook->resetTitle();
print $starDecoratedTitleBook->showTitle();
