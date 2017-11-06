<?php

class Product {

  private $price = NULL;
  private $available = false;
  private $name = NULL;

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
