<?php

namespace Webham\DesignPatterns\ProxyExample;

use Webham\DesignPatterns\ProxyExample\GetNewsSubjectInterface;

class RealGetNewsSubject implements GetNewsSubjectInterface
{
    public function request(): void
    {
        print "The news from today are .. <br>.";
    }
}
