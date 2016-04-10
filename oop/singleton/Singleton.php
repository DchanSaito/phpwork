<?php
class Singleton {
  private static $singleton;

  private function __construct() {
    echo("インスタンス生成しました\n");
  }

  public static function getInstance() {
    if (!self::$singleton) self::$singleton = new Singleton;
    return self::$singleton;
  }
}