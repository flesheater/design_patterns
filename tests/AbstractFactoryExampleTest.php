<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\AbstractFactory\OsxUiAbstractFactory;
use Webham\DesignPatterns\AbstractFactory\WindowsUiAbstractFactory;

/**
 * Testing the Abstract Factory implementation.
 */
class AbstractFactoryExampleTest extends TestCase
{
    const WINDOWS_UI_ELEMENT_SUFFIX = ' window.';
    const CLOSE_UI_ELEMENT_SUFFIX = ' close button.';
    const CLOSE_ACTION_PREFIX = 'Closing (';
    const CLOSE_ACTION_SUFFIX = ') ...';

    protected function setUp()
    {
    }

    /**
     * @group abstract_factory
     */
    public function testOsxUiAbstractFactory(): void
    {
        fwrite(STDOUT, "\n Testing OSX UI abstract factory. \n");
        $osxFactory = new OsxUiAbstractFactory;
        $osxWindow = $osxFactory->createDialogWindow();
        $osxCloseButton = $osxFactory->createCloseButton();

        $this->assertEquals($osxWindow->render(), 'OSX' . self::WINDOWS_UI_ELEMENT_SUFFIX);
 
        $this->assertEquals($osxCloseButton->render(), 'OSX' . self::CLOSE_UI_ELEMENT_SUFFIX);

        $this->assertEquals(
            $osxCloseButton->close($osxWindow),
            self::CLOSE_ACTION_PREFIX . $osxWindow->render() . self::CLOSE_ACTION_SUFFIX
        );
    }

    /**
     * @group abstract_factory
     */
    public function testWindowsUiAbstractFactory(): void
    {
        fwrite(STDOUT, "\n Testing Windows UI abstract factory. \n");
        $windowsFactory = new WindowsUiAbstractFactory;
        $windowsWindow = $windowsFactory->createDialogWindow();
        $windowsCloseButton = $windowsFactory->createCloseButton();

        $this->assertEquals($windowsWindow->render(), 'Windows' . self::WINDOWS_UI_ELEMENT_SUFFIX);
 
        $this->assertEquals($windowsCloseButton->render(), 'Windows' . self::CLOSE_UI_ELEMENT_SUFFIX);

        $this->assertEquals(
            $windowsCloseButton->close($windowsWindow),
            self::CLOSE_ACTION_PREFIX . $windowsWindow->render() . self::CLOSE_ACTION_SUFFIX
        );
    }
}
