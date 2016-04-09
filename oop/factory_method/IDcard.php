<?php

class IDcard extends Product {
  private $owner;

  function __construct($owner) {
    echo($owner."のカードを作ります");
    $this->owner = $owner;
  }

  public function used() {
    echo($this->owner."のカードを使います");
  }

  public function getOwner() {
    return $this->owner;
  }
}