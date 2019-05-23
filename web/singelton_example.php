<?php

/**
 * @file
 * Glue code.
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\SingletonExample\TextEditorStreamSingleton;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
Singleton

==========================
</pre>";

print "<strong>Two users start writing at the same file.</strong><br>";
$userOneEditingFile = TextEditorStreamSingleton::getInstance();
$userTwoEditingFile = TextEditorStreamSingleton::getInstance();

print "<strong>User one adds some text.</strong><br>";
$userOneEditingFile->addText('Here is some interesting text from user 1.');
print "<strong>User two adds some text.</strong><br>";
$userTwoEditingFile->addText('Some more interesting text from user 2.');
print "<strong>User two shows his text:</strong><br>";
print $userTwoEditingFile->showText();
