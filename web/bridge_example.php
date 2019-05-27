<?php

/**
 * @file
 * Glue code .
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\BridgeExample\Image;
use Webham\DesignPatterns\BridgeExample\Video;
use Webham\DesignPatterns\BridgeExample\ListMediaViewBridge;
use Webham\DesignPatterns\BridgeExample\ExtendedMediaViewBridge;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
Bridge Pattern
==========================
</pre>";

//// Render as list.
$media_list = [];
$implementationList1 = new Image("Image One", "(^_^)");
$implementationList2 = new Video("Video One", '($.$)');

$media_list[] = new ListMediaViewBridge($implementationList1);
$media_list[] = new ListMediaViewBridge($implementationList2);

print "List:<br>";
foreach ($media_list as $media_list_item) {
  print $media_list_item->render();
}

//// Render as extended list.
$media_list_extended = [];
$media_list_extended[] = new ExtendedMediaViewBridge($implementationList1);
$media_list_extended[] = new ExtendedMediaViewBridge($implementationList2);

print "Detail:<br>";
foreach ($media_list_extended as $media_list_item) {
  print $media_list_item->render();
}
