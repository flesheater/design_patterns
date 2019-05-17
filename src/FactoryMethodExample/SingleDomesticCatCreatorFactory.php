<?php

namespace Webham\DesignPatterns\FactoryMethodExample;

use Webham\DesignPatterns\FactoryMethodExample\CatCreatorFactory;
use Webham\DesignPatterns\FactoryMethodExample\CatInterface;

class SingleDomesticCatCreatorFactory extends CatCreatorFactory
{

    public function factoryMethod(): CatInterface
    {
        return new DomesticCat;
    }
}
