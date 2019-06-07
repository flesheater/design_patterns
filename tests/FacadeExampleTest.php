<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\FacadeExample\TitleFacade;
use Webham\DesignPatterns\FacadeExample\TitlePrefixer;
use Webham\DesignPatterns\FacadeExample\TitleSuffixer;

class FacadeExampleTest extends TestCase
{
    public function testFacadeOutput()
    {
        $subsystem1 = new TitlePrefixer;
        $subsystem2 = new TitleSuffixer;
        $titleFacade = new TitleFacade($subsystem1, $subsystem2);
        $titleFacade->setTitle('I am Spartacus!');
        $this->assertEquals(
            $titleFacade->operation(),
            '666xxTEXTxxI am Spartacus!xxTEXTxx666'
        );
    }
}
