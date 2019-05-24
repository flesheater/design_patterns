<?php

namespace Webham\DesignPatterns\CommandExample;

use Webham\DesignPatterns\CommandExample\CowReceiverInterface;

class Cow implements CowReceiverInterface
{
    private $isMilked;
    public function __construct(bool $isMilked) {
      $this->isMilked = $isMilked;
    }
    public function isMilked() {
      return $this->isMilked;
    }
    public function milkCow()
    {
      $this->isMilked = true;
    }
}
