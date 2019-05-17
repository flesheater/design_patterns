<?php

namespace Webham\DesignPatterns\FactoryMethodExample;

use Webham\DesignPatterns\FactoryMethodExample\CatCreatorFactory;
use Webham\DesignPatterns\FactoryMethodExample\CatInterface;

class MultipleDomesticCatCreatorFactory extends CatCreatorFactory
{

    public function factoryMethod(): CatInterface
    {
        return new DomesticCat;
    }

    public function visualizeOperation(): string
    {
        $display = '';
        for($i=0;$i<10;$i++){
          $currentCat = $this->factoryMethod();
          $display .= $currentCat->display();
        }

        return $display;
    }
}
