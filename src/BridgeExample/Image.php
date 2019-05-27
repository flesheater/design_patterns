<?php

namespace Webham\DesignPatterns\BridgeExample;

use Webham\DesignPatterns\BridgeExample\MediaImplementation;

class Image extends MediaImplementation
{
    public function renderMedia()
    {
        return '::img::' . $this->media . '::/img::';
    }
    public function renderTitle()
    {
        return $this->title;
    }
}
