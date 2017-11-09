<?php
class Book {
  private $id = NULL;
  private $title = NULL;
  private $isbn = NULL;
  private $pages = NULL;
  private $id_author = NULL;

  public function __construct($id, $title, $isbn,$pages, $id_author) {
    // assignation directe ans setters
    $this->id = $id;
    $this->title = $title;
    $this->isbn = $isbn;
    $this->pages = $pages;
    $this->id_author = $id_author;
  }

  public function getId() { return $this->id;}
  public function getTitle() { return $this->title;}
  public function getIsbn() { return $this->isbn;}
  public function getPages() { return $this->pages;}
  public function getIdAuthor() { return $this->id_author;}
}
?>
