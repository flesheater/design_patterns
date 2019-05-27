<?php

namespace Webham\DesignPatterns\BridgeExample;

class ExtendedMediaViewBridge extends MediaViewBridge
{
    public function render()
    {
        return $this->implementation->renderTitle()
          . $this->implementation->renderMedia() . "<br>";
    }
}
