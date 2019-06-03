<?php

/**
 * @file
 * Glue code.
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\TemplateMethodExample\PageOne;

print '<a href="/">back</a>';
print "
<pre>
==========================
Template method.

</pre>";

$class = new PageOne;
$class->templateMethod();
