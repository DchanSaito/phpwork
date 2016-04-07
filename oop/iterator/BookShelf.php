<?php
class BookShelf implements Aggregate {
  private $books;
  private $last = 0;

  public function __construct() {
    $this->books = array();
  }

  public function getBookAt($index) {
    return $this->books[$index];
  }

  public function appendBook($book) {
    $this->books[] = $book;
    $this->last += 1;
  }

  public function getLength() {
    return $this->last;
  }

  public function iterator() {
    return new BookShelfIterator($this);
  }
}