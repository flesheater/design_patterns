<?php

namespace Webham\DesignPatterns\BridgeExample;

use Webham\DesignPatterns\BridgeExample\MediaImplementation;

/**
 * Each Concrete Implementation corresponds to a specific platform and
 * implements the Implementation interface using that platform's API.
 */
class Video extends MediaImplementation
{
    public function renderMedia()
    {
        return "::video::" . $this->media . '::/video::';
    }
    public function renderTitle()
    {
        return $this->title;
    }
}
