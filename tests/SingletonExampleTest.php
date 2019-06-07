<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\SingletonExample\TextEditorStreamSingleton;

class SingletonExample extends TestCase
{
    public function testSingletonEditingByTwoUsers()
    {
        $userOneEditingFile = TextEditorStreamSingleton::getInstance();
        $userTwoEditingFile = TextEditorStreamSingleton::getInstance();

        $userOneEditingFile->addText('Here is some interesting text from user 1.');
        $userTwoEditingFile->addText('Some more interesting text from user 2.');
        $this->assertEquals(
            $userTwoEditingFile->showText(),
            'Here is some interesting text from user 1.Some more interesting text from user 2.'
        );
    }
}