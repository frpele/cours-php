<?php

class Product {

  //constante de classe
//elles ne sont pas transmises aux objets
// statiques et non visibles, uniquement accès en lecture
  const CONSTANTE_DE_CLASSE = "Je suis une constante de classe";



  private $price = 99.99;
  private $available = false;
  private $name = NULL;

  public $test ="public test Product";
  protected $test2 ="protected test2 Product";

  public function __construct($name) {

    $this->setName($name);
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
      $this->name = $name;
      return $this->name;
  }

  // accesseur (getter) => accès en lecture
  public function getPrice() {
    return $this->price;
  }

  public function getAvailable() {
    return $this->available;
  }

  // mutateur (setter) => accès en écriture
  public function setPrice($price) {
      $this->price = $price;
      return $this->price;
  }

  public function setAvailable($available) {
      $this->available = $available;
      return $this->available;
  }

}

?>
