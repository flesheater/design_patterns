<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\AbstractFactory\OsxUiAbstractFactory;
use Webham\DesignPatterns\AbstractFactory\WindowsUiAbstractFactory;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
Abstract Factory Example

==========================
</pre>";

// Implementing OSX window.
$osxFactory = new OsxUiAbstractFactory;
$osxWindow = $osxFactory->createDialogWindow();
$osxCloseButton = $osxFactory->createCloseButton();
print $osxWindow->render();
print "<br>";
print $osxCloseButton->render();
print "<br>";
print $osxCloseButton->close($osxWindow);
print "<br>";


// Implementing windows window.
$windowsFactory = new WindowsUiAbstractFactory;
$windowsWindow = $windowsFactory->createDialogWindow();
$windowsCloseButton = $windowsFactory->createCloseButton();
print $windowsWindow->render();
print "<br>";
print $windowsCloseButton->render();
print "<br>";
print $windowsCloseButton->close($windowsWindow);
