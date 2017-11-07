<?php

class QCM {
  private $db = NULL;
  private $category = NULL;
  private $level = NULL;
  private $nb_questions = NULL ;

  public function __construct($db, $category, $level, $nb_questions) {
    $this->setDb($db);
    $this->setCategory($category);
    $this->setLevel($level);
    $this->setNbQuestions($nb_questions);
  }

  // getters
  public function getCategory() {
    return $this->category;
  }
  public function getLevel() {
    return $this->level;
  }
  public function getNbQuestions() {
    return $this->nb_questions;
  }

  // setters
  private function setDb(PDO $db) {
    // On indique de quel type sera l'argument
    // Ce renseignement, qu'on utilise uniquement dans le cas de type complexes
    // (array, object) est facultatif
    $this->db =$db;
    return $this->db;
  }
  public function setCategory($category) {
    $this->category = $category;
    return $this->category;
  }
  public function setLevel($level) {
    $this->level = $level;
    return $this->level;
  }
  public function setNbQuestions($nb_questions) {
    $this->nb_questions = $nb_questions;
    return $this->nb_questions;
  }

  public function generate() {
    $query = $this->db->prepare('SELECT * FROM question');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
  }


}


 ?>
