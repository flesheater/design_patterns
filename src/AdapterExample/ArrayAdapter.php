<?php

namespace Webham\DesignPatterns\AdapterExample;

use Webham\DesignPatterns\AdapterExample\OrderedStringMapAdapterInterface;

class ArrayAdapter implements OrderedStringMapAdapterInterface
{

    private $map = [];

    public function addNew(String $item)
    {
        $this->map[] = $item;
    }

    public function getFirst()
    {
        return $this->map[0];
    }

    public function getLast()
    {
        return end($this->map);
    }

    public function getAllAsArray()
    {
        return $this->map;
    }
}
