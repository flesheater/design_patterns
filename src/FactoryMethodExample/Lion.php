<?php

namespace Webham\DesignPatterns\FactoryMethodExample;

use Webham\DesignPatterns\FactoryMethodExample\CatInterface;

class Lion implements CatInterface
{

    public function display(): string
    {
        return "<pre>
      @|\@@
     -  @@@@
    /7   @@@@
   /    @@@@@@
   \-' @@@@@@@@`-_______________
    -@@@@@@@@@             /    \
_______/    /_       ______/      |__________-
/,__________/  `-.___/,_____________----------_)
</pre>";
    }
}
