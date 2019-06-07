<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\FactoryMethodExample\SingleLionCreatorFactory;
use Webham\DesignPatterns\FactoryMethodExample\SingleDomesticCatCreatorFactory;

/**
 * Testing the Factory method example.
 */
class FactoryMethodExample extends TestCase
{
    public function testDomesticCatFactory()
    {
        $creator1 = new SingleDomesticCatCreatorFactory;
        $this->assertEquals(
            $creator1->visualizeOperation(),
            "<pre>
   |\---/|
   | ,_, |
    \_`_/-..----.
 ___/ `   ' ,''+ \
(__...'   __\    |`.___.';
  (_,...'(_,.`__)/'.....+
  </pre>"
        );
    }

    public function testLionCatFactory()
    {
        $creator1 = new SingleLionCreatorFactory;
        $this->assertEquals(
            $creator1->visualizeOperation(),
            "<pre>
      @|\@@
     -  @@@@
    /7   @@@@
   /    @@@@@@
   \-' @@@@@@@@`-_______________
    -@@@@@@@@@             /    \
_______/    /_       ______/      |__________-
/,__________/  `-.___/,_____________----------_)
</pre>"
        );
    }
}
