<?php

namespace Webham\DesignPatterns\AdapterExample;

interface OrderedStringMapAdapterInterface {
    public function addNew(String $item);
    public function getFirst();
    public function getLast();
    public function getAllAsArray();
}
