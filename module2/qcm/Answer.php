<?php
class Answer {
  private $body = NULL;
  private $correct = NULL;
  private $id = NULL;
  private $id_question = NULL;

  public function __construct($id, $body, $correct,$id_question) {
    // assignation directe ans setters
    $this->id = $id;
    $this->body = $body;
    $this->correct = $correct;
    $this->id_question = $id_question;
  }

  public function getId() { return $this->id;}
  public function getBody() { return $this->body;}
  public function getCorrect() { return $this->correct;}
  public function getIdQuestion() { return $this->id_question;}
}
?>
