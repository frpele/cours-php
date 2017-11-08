<?php

include_once('Answer.php');

class Question {
  private $id = NULL;
  private $title = NULL;
  private $level = NULL;
  private $category = NULL;
  private $answers = array(); // propriété permettant de stocker des réponses

  public function __construct($id, $title, $level, $category) {
    $this->id = $id;
    $this->level = $level;
    $this->title = $title;
    $this->category = $category;
  }

  public function addAnswer(Answer $answer) {
    // ajoute au tableau $this->answers la réponse fournie
    array_push($this->answers, $answer);
    return;
  }

  public function getTitle() { return $this->title;}
  public function getAnswers() { return $this->answers;}
  public function getId() { return $this->id;}

}
 ?>
