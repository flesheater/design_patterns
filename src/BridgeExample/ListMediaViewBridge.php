<?php

namespace Webham\DesignPatterns\BridgeExample;

use Webham\DesignPatterns\BridgeExample\MediaViewBridge;

/**
 * You can extend the Abstraction without changing the Implementation classes.
 */
class ListMediaViewBridge extends MediaViewBridge
{
    public function render()
    {
        return $this->implementation->renderTitle() . "<br>";
    }
}
