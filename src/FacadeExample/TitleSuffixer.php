<?php

namespace Webham\DesignPatterns\FacadeExample;

class TitleSuffixer
{
    public function suffixWithText($title): string
    {
        return $title . "xxTEXTxx";
    }

    public function suffixWithNumber($title): string
    {
        return $title . "666";
    }
}
