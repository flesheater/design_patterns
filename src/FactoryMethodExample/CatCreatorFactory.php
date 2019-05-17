<?php

namespace Webham\DesignPatterns\FactoryMethodExample;

use Webham\DesignPatterns\FactoryMethodExample\CatInterface;

abstract class CatCreatorFactory
{

    abstract public function factoryMethod(): CatInterface;

    public function visualizeOperation(): string
    {
       $cat = $this->factoryMethod();
       return $cat->display();
    }
}
