<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\DecoratorExample\Book;
use Webham\DesignPatterns\DecoratorExample\BookTitleExclaimDecorator;
use Webham\DesignPatterns\DecoratorExample\BookTitleStarDecorator;

/**
 * Testing the Decorator implementation.
 */
class DecoratorExampleTest extends TestCase
{
    protected $book;

    protected function setUp()
    {
        $this->book = new Book('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');
    }

    /**
     * @group decorator
     */
    public function testExclaimDecorate(): void
    {
        fwrite(STDOUT, "\n Testing the exclaim decorator. \n");
        $exclaimDecoratedTitleBook = new BookTitleExclaimDecorator($this->book);
        $exclaimDecoratedTitleBook->exclaimTitle();

        $this->assertNotEquals($exclaimDecoratedTitleBook->showTitle(), 'Design Patterns');
        $this->assertEquals($exclaimDecoratedTitleBook->showTitle(), '!Design Patterns!');
    }

    /**
     * @group decorator
     */
    public function testStarDecorator()
    {
        fwrite(STDOUT, "\n Testing the star decorator. \n");
        $starDecoratedTitleBook = new BookTitleStarDecorator($this->book);
        $starDecoratedTitleBook->starTitle();

        $this->assertNotEquals($starDecoratedTitleBook->showTitle(), 'Design Patterns');
        $this->assertEquals($starDecoratedTitleBook->showTitle(), 'Design*Patterns');

        return $starDecoratedTitleBook;
    }

    /**
     * @group decorator
     * @depends testStarDecorator
     */
    public function testResetDecoratedTitle($starDecoratedBook)
    {
        fwrite(STDOUT, "\n Testing the reset functionality. \n");
        $starDecoratedBook->resetTitle();

        $this->assertNotEquals($starDecoratedBook->showTitle(), 'Design*Patterns');
        $this->assertEquals($starDecoratedBook->showTitle(), 'Design Patterns');
    }
}
