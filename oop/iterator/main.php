<?php
require "Aggregate.php";
require "Iterator.php";
require "Book.php";
require "BookShelf.php";
require "BookShelfIterator.php";
$bookShelf = new BookShelf;
$bookShelf->appendBook(new Book("hogehoge1"));
$bookShelf->appendBook(new Book("hogehoge2"));
$bookShelf->appendBook(new Book("hogehoge3"));
$it = $bookShelf->Iterator();

while($it->hasNext()) {
  $book = $it->next();
  echo $book->getName()."\n";
}