<?php

include_once('Product.php');

class Book extends Product {
  private $nbPages = NULL;

  public function getNbPages() {
    return $this->NbPages;
  }

  public function setNbPages($NbPages) {
      $this->NbPages = $NbPages;
      return $this->NbPages;
  }

}


 ?>
