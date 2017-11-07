<?php

include_once('Product.php');

class Book extends Product {

// private inaccessible depuis l'extérieur,
// accessible seulement à l'intérieur de la classe
// non écrasable par une class héritière
// Si la classe fille définit une propriété portant le même nom que la classe mère
// => un doublon est généré

// protected inaccessible depuis l'extérieur,
// écrasable par une classe héritière
// Si la classe fille définit une propriété portant le même nom que la classe mère
// => cette propriété remplace celle de la classe mère

// accessible depuis l'extérieur,
// écrasable par une classe héritière
// Si la classe fille définit une propriété portant le même nom que la classe mère
// => cette propriété remplace celle de la classe mère


  private $price =12.3;
  private $nbPages = NULL;

  public $test ="public test Book ";
  protected $test2 ="protected test2 Book";

  public function getNbPages() {
    return $this->NbPages;
  }

  public function setNbPages($NbPages) {
      $this->NbPages = $NbPages;
      return $this->NbPages;
  }

// Le constructeur des l'enfant écrase celui du parent
// Il ne peut y avoir qu'un seul constructeur par classe
  public function __construct() {

  }

  public function getTest2() {
    return $this->test2; // renvoie la valeur de la propriété protégée
  }

}
 ?>
