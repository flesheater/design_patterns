<?php

namespace Webham\DesignPatterns\BridgeExample;

/**
 * The Implementation defines the interface for all implementation classes. It
 * doesn't have to match the Abstraction's interface. In fact, the two
 * interfaces can be entirely different. Typically the Implementation interface
 * provides only primitive operations, while the Abstraction defines higher-
 * level operations based on those primitives.
 */
abstract class MediaImplementation
{
    protected $title;
    protected $media;
    public function __construct($title, $media)
    {
        $this->title = $title;
        $this->media = $media;
    }
    public function renderMedia()
    {
    }
    public function renderTitle()
    {
    }
}
