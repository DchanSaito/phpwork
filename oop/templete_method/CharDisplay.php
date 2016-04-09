<?php
class CharDisplay extends AbstractDisplay {
  private $ch;
  
  function __construct($ch) {
    $this->ch = $ch;
  }

  function open() {
    echo("<<");
  }

  function printer() {
    echo $this->ch;
  }

  function close() {
    echo(">>");
  }
}