<?php

namespace Webham\DesignPatterns\ProxyExample;

use Webham\DesignPatterns\ProxyExample\GetNewsSubjectInterface;
use Webham\DesignPatterns\ProxyExample\RealGetNewsSubject;

class GetNewsSubjectProxy implements GetNewsSubjectInterface
{

    private $realSubject;
    private $userAccess;

    public function __construct(RealGetNewsSubject $realSubject, $userAccess)
    {
        $this->realSubject = $realSubject;
        $this->userAccess = $userAccess;
    }

    public function request(): void
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->logAccess();
        }
    }

    private function checkAccess(): bool
    {
        print "Proxy: Checking access prior to firing a real request. <br>";
        if ($this->userAccess) {
            print "Proxy: Access allowed. <br>";
            return true;
        }
        print "Proxy: Access denied. <br>";
        return false;
    }

    private function logAccess(): void
    {
        print "Proxy: Logging the time of request. <br>";
    }
}
