<?php

namespace Webham\DesignPatterns\BridgeExample;

use Webham\DesignPatterns\BridgeExample\MediaImplementation;

/**
 * The Abstraction defines the interface for the "control" part of the two class
 * hierarchies. It maintains a reference to an object of the Implementation
 * hierarchy and delegates all of the real work to this object.
 */
abstract class MediaViewBridge
{
    protected $implementation;

    public function __construct(MediaImplementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function render() {}
}
