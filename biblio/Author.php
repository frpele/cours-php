<?php

class Author {
  private $db = NULL;
  private $id = NULL;
  private $firstname = NULL;
  private $lastname = NULL;
  private $birth_year = NULL;
  private $country = NULL;
  // private $books = array(); // propriété permettant de stocker les livres des auteurs

  public function __construct($db, $id, $firstname, $lastname, $birth_year, $country) {
    // assignation directe ans setters
    $this->setDb($db);
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

  private function setDb(PDO $db) {
    $this->db = $db;
    return $this->db;
  }

  public function getAuthors() {

   $query = $this->db->prepare
        ('SELECT *
          FROM author
          ORDER BY lastname
        ');

    // 2 Execution
    $query->execute();
    //3 Récupération des données (fetch)
    $authors = $query-> fetchAll(PDO::FETCH_OBJ);
    return $authors;
  }

}


 ?>
