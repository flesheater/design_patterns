<?php

namespace Webham\DesignPatterns\AdapterExample;

use Webham\DesignPatterns\AdapterExample\DatabaseAdapterInterface;

class OrderedStringStorage {
    private $source;

    public function __construct(OrderedStringMapAdapterInterface $source) {
        $this->source = $source;
    }

    public function addOne(String $item) {
        return $this->source->addNew($item);
    }

    public function getFirst() {
        return $this->source->getFirst();
    }

    public function getLast() {
        return $this->source->getLast();
    }

    public function getAll() {
        return $this->source->getAllAsArray();
    }
}
