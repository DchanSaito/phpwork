<?php
abstract class AbstractDisplay {
  abstract function open();
  abstract function printer();
  abstract function close();
  final function display() {
    $this->open();
    for($i=0; $i < 5; $i++) {
      $this->printer();
    }
    $this->close();
  }
}