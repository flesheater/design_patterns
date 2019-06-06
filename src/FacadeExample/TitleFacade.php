<?php

namespace Webham\DesignPatterns\FacadeExample;

use Webham\DesignPatterns\FacadeExample\TitlePrefixer;
use Webham\DesignPatterns\FacadeExample\TitleSuffixer;

class TitleFacade
{
    protected $subsystem1;
    protected $subsystem2;
    protected $title;

    public function __construct(
        TitlePrefixer $subsystem1 = null,
        TitleSuffixer $subsystem2 = null
    ) {
        $this->subsystem1 = $subsystem1 ?: new TitlePrefixer;
        $this->subsystem2 = $subsystem2 ?: new TitleSuffixer;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function operation(): string
    {
        $this->setTitle(
            $this->subsystem1->prefixWithText($this->title)
        );
        $this->setTitle(
            $this->subsystem1->prefixWitheNumber($this->title)
        );
        $this->setTitle(
            $this->subsystem2->suffixWithText($this->title)
        );
        $this->setTitle(
            $this->subsystem2->suffixWithNumber($this->title)
        );

        return $this->title;
    }
}
