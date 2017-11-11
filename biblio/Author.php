<?php
class Author() {
  private $id = NULL;
  private $firstname = NULL;
  private $lastname = NULL;
  private $birth_year = NULL;
  private $country = NULL;
  private $books = array(); // propriété permettant de stocker les livres des auteurs


  public function __construct($id, $firstname, $lastname, $birth_year, $country) {
    // assignation directe ans setters
    $this->id = $id;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->birth_year = $birth_year;
    $this->country = $country;
  }

  public function getId() { return $this->id;}
  public function getFirstname() { return $this->firstname;}
  public function getLastname() { return $this->lastname;}
  public function getBirthYear() { return $this->birth_year;}
  public function getCountry() { return $this->country;}

}




 ?>
