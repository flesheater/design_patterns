<?php

namespace Webham\DesignPatterns\FactoryMethodExample;

use Webham\DesignPatterns\FactoryMethodExample\CatInterface;

class DomesticCat implements CatInterface
{

    public function display(): string
    {
        return "<pre>
   |\---/|
   | ,_, |
    \_`_/-..----.
 ___/ `   ' ,''+ \
(__...'   __\    |`.___.';
  (_,...'(_,.`__)/'.....+
  </pre>";
    }
}
