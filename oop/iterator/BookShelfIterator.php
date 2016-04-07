<?php
class BookShelfIterator implements Iterator1 {
  private $bookShelf;
  private $index;
  
  public function __construct($bookShelf) {
    $this->bookShelf = $bookShelf;
    $this->index = 0;
  }

  public function hasNext() {
    if ($this->index < $this->bookShelf->getLength()) {
      return true;
    } else {
      return false;
    }
  }

  public function next() {
    $book = $this->bookShelf->getBookAt($this->index);
    $this->index += 1;
    return $book;
  }
}