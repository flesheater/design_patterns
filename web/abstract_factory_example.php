<?php

interface UiAbstractFactoryInterface
{
    public function createDialogWindow(): DialogWindowInterface;

    public function createCloseButton(): CloseButtonInterface;
}


class OsxUiAbstractFactory implements UiAbstractFactoryInterface
{
    public function createDialogWindow(): DialogWindowInterface
    {
        return new OsxDialogWindow;
    }

    public function createCloseButton(): CloseButtonInterface
    {
        return new OsxCloseButton;
    }
}

class WindowsUiAbstractFactory implements UiAbstractFactoryInterface
{
    public function createDialogWindow(): DialogWindowInterface
    {
        return new WindowsDialogWindow;
    }

    public function createCloseButton(): CloseButtonInterface
    {
        return new WindowsCloseButton;
    }
}


interface DialogWindowInterface
{
    public function render(): string;
}

class OsxDialogWindow implements DialogWindowInterface
{
    public function render(): string
    {
        return "OSX window.";
    }
}

class WindowsDialogWindow implements DialogWindowInterface
{
    public function render(): string
    {
        return "Windows window.";
    }
}

interface CloseButtonInterface
{

    public function render(): string;

    public function close(DialogWindowInterface $window): string;
}

class OsxCloseButton implements CloseButtonInterface
{
    public function render(): string
    {
        return "Osx close button.";
    }

    public function close(DialogWindowInterface $window): string
    {
        return "Closing ({$window->render()}) ...";
    }
}

class WindowsCloseButton implements CloseButtonInterface
{
    public function render(): string
    {
        return "Windows close button.";
    }

    public function close(DialogWindowInterface $window): string
    {
        return "Closing ({$window->render()}) ...";
    }
}

// Implementing OSX window.
$osxFactory = new OsxUiAbstractFactory;
$osxWindow = $osxFactory->createDialogWindow();
$osxCloseButton = $osxFactory->createCloseButton();
print $osxWindow->render();
print "<br>";
print $osxCloseButton->render();
print "<br>";
print $osxCloseButton->close($osxWindow);
print "<br>";


// Implementing windows window.
$windowsFactory = new WindowsUiAbstractFactory;
$windowsWindow = $windowsFactory->createDialogWindow();
$windowsCloseButton = $windowsFactory->createCloseButton();
print $windowsWindow->render();
print "<br>";
print $windowsCloseButton->render();
print "<br>";
print $windowsCloseButton->close($windowsWindow);
