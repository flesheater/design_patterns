<?php

namespace Webham\DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Webham\DesignPatterns\BridgeExample\Image;
use Webham\DesignPatterns\BridgeExample\Video;
use Webham\DesignPatterns\BridgeExample\ListMediaViewBridge;
use Webham\DesignPatterns\BridgeExample\ExtendedMediaViewBridge;

class BridgeExampleTest extends TestCase
{
    private $implementationList1;
    private $implementationList2;

    public function setUp()
    {
        $this->implementationList1 = new Image("Image One", "(^_^)");
        $this->implementationList2 = new Video("Video One", '($.$)');
    }

    public function testListMediaViewBridge()
    {
        $media_list = [];
        $media_list[] = new ListMediaViewBridge($this->implementationList1);
        $media_list[] = new ListMediaViewBridge($this->implementationList2);

        foreach ($media_list as $media_list_item) {
            print $media_list_item->render();
        }
        $this->assertContains(
            'Image One<br>',
            $this->getActualOutput()
        );
        $this->assertContains(
            'Video One<br>',
            $this->getActualOutput()
        );
    }

    public function testExtendedMediaViewBridge()
    {
        //// Render as extended list.
        $media_list_extended = [];
        $media_list_extended[] = new ExtendedMediaViewBridge($this->implementationList1);
        $media_list_extended[] = new ExtendedMediaViewBridge($this->implementationList2);

        foreach ($media_list_extended as $media_list_item) {
            print $media_list_item->render();
        }

        $this->assertContains(
            'Image One::img::(^_^)::/img::<br>',
            $this->getActualOutput()
        );
        $this->assertContains(
            'Video One::video::($.$)::/video::<br>',
            $this->getActualOutput()
        );
    }
}
