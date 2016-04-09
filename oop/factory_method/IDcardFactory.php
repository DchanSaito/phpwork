<?php

class IDcardFactory extends Factory {
  private $owners = array();

  protected function createProduct($owner) {
    return new IDcard($owner);
  }

  protected function registerProduct($product) {
    $this->owners[] = $product->getOwner();
  }

  public function getOwners() {
    return $this->owners;
  }
}