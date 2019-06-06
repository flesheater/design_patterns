<?php

namespace Webham\DesignPatterns\NullObjectExample;

class NullLogger implements LoggerInterface
{
    public function log(string $str)
    {
        // do nothing
    }
}
