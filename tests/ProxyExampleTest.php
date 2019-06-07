<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\ProxyExample\RealGetNewsSubject;
use Webham\DesignPatterns\ProxyExample\GetNewsSubjectProxy;

class ProxyExampleTest extends TestCase
{
    public function testUserProxyWithAccess()
    {
        $user_access = true;
        $realSubject = new RealGetNewsSubject;
        $proxy = new GetNewsSubjectProxy($realSubject, $user_access);
        $proxy->request();

        $this->assertContains(
            'Proxy: Access allowed.',
            $this->getActualOutput()
        );
    }

    public function testUserProxyWithoutAccess()
    {
        $user_access = false;
        $realSubject = new RealGetNewsSubject;
        $proxy = new GetNewsSubjectProxy($realSubject, $user_access);
        $proxy->request();

        $this->assertContains(
            'Proxy: Access denied.',
            $this->getActualOutput()
        );
    }
}