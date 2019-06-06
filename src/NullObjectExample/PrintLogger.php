<?php

namespace Webham\DesignPatterns\NullObjectExample;

class PrintLogger implements LoggerInterface
{
    public function log(string $str)
    {
        print $str;
    }
}
