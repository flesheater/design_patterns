<?php

namespace Webham\DesignPatterns\FacadeExample;

class TitlePrefixer
{
    public function prefixWithText($title): string
    {
        return "xxTEXTxx" . $title;
    }

    public function prefixWitheNumber($title): string
    {
        return "666" . $title;
    }
}
