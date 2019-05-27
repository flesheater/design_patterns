<?php

/**
 * @file
 * Glue code.
 */

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

use Webham\DesignPatterns\ProxyExample\RealGetNewsSubject;
use Webham\DesignPatterns\ProxyExample\GetNewsSubjectProxy;

/**
 * The client code.
 */
print '<a href="/">back</a>';
print "
<pre>
==========================
Proxy

==========================
</pre>";

print "Example with a user that has <strong>no access</strong>: <br>";
$user_access = false;
print "Creating the real subject. <br>";
$realSubject = new RealGetNewsSubject;

print "Executing the real client code with a proxy: <br>";
$proxy = new GetNewsSubjectProxy($realSubject, $user_access);
$proxy->request();

print "================================ <br>";
print "Example with a user <strong>with access</strong>: <br>";
$user_access = true;
print "Creating the real subject. <br>";
$realSubject = new RealGetNewsSubject;

print "Executing the real client code with a proxy: <br>";
$proxy = new GetNewsSubjectProxy($realSubject, $user_access);
$proxy->request();
