<?php

namespace Webham\DesignPatterns\AdapterExample;

use Webham\DesignPatterns\AdapterExample\OrderedStringMapAdapterInterface;
use \Ds\Set;

class SetAdapter implements OrderedStringMapAdapterInterface {

  private $map;

  public function __construct() {
    $this->map = new Set([]);
  }

  public function addNew(String $item) {
    $this->map->add($item);
  }

  public function getFirst() {
    return $this->map->first();
  }

  public function getLast() {
    return $this->map->last();
  }

  public function getAllAsArray() {
    return $this->map->toArray();
  }

}
