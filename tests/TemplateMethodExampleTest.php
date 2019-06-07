<?php

namespace Webham\DesignPatterns\Test;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\TemplateMethodExample\PageOne;

class TemplateMethodExampleTest extends TestCase
{
    public function testTemplateMethodParentContent()
    {
        $class = new PageOne;
        $class->templateMethod();

        $this->assertContains(
            'This is the footer.',
            $this->getActualOutput()
        );
    }

    public function testTemplateMethodChildContent()
    {
        $class = new PageOne;
        $class->templateMethod();

        $this->assertContains(
            'Body content.',
            $this->getActualOutput()
        );
        $this->assertContains(
            'Header content.',
            $this->getActualOutput()
        );
    }
}
