<?php

abstract class Factory {
  final function create($owner) {
    $p = $this->createProduct($owner);
    $this->registerProduct($p);
    return $p;
  }
  protected abstract function createProduct($owner);
  protected abstract function registerProduct($product);
}