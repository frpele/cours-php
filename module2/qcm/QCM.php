<?php

include_once('Answer.php');
include_once('Question.php');


class QCM {
  private $db = NULL;
  private $category = NULL;
  private $level = NULL;
  private $nb_questions = NULL ;
  private $questions = array(); // servira à stocker les résultats
  // de la méthode générate

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
  public function getQuestions() {
    return $this->questions;}

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
    return $this->nb_questions;}
  private function setQuestions(array $questions) {
    $this->questions = $questions;
    return $this->questions;}


  public function generate() {
    // La jointure interne JOIN renverra nécessairement
    // des questions qui ont des réponses
    //Les questions sans réponse seront exclues
    // La jointure interne est restrictive
    // A la différence des jointures externes(LEFT JOIN et RIGHT JOIN)
    //qui,elles, peuvent retourner des éléments sans qu'une table ait de
    //correspondance dans l'autre
    $query = $this->db->prepare
      ('SELECT question.title, question.category, question.level,
        answer.body,answer.correct, answer.id AS id_answer, answer.id_question
        FROM question
        JOIN answer ON question.id = answer.id_question
        WHERE category = :category
        AND level = :level
        ORDER BY question.id ASC
        ');
      // La méthode bindValue est une autre façon d'associer des valeurs
      // aux placeholders
    $query->bindValue(':category',$this->getCategory(), PDO::PARAM_INT);
    $query->bindValue(':level',$this->getLevel(), PDO::PARAM_INT);
    $query->execute();

    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if (sizeof($results) > 0) {
      $resultsTransformed = $this->transformData($results);
      return $this->setQuestions($resultsTransformed);
    } else {
    return false;
    }

  }

  private function transformData($rows) {
    // fonction destinée à transformer les données reçus par la méthode générate
    // en tableau d'objets questions. Chaque objet question contiendra un tableau
    // d'objets Answer
    $questions= [];

    $id_question = $rows[0]->id_question; // Identifiant de la première question
    $question = new Question(NULL, NULL, NULL, NULL);
    $i = -1;//indice permettant d'insérer une question au bon endroit
    // dans le tableau des questions
    $firstQuestion = true;

    foreach($rows as $row) {

      $answer = new Answer(
        $row->id_answer, $row->body, $row->correct,$row->id_question);

      if ($row->id_question != $id_question || $firstQuestion) {
        $i++;
        // changement de question
        $question = new Question(
          $row->id_question, $row->title, $row->category,$row->level);

        $questions[$i] = $question;

        $id_question = $row->id_question;
        $firstQuestion = false;
      }
      $questions[$i]->addAnswer($answer);
    }
    return $questions;
  }

  public function processChoices($choices) {
    // $choices correspond à $_POST
    $results =0; // variable servant au cumul des bonnes réponses
    $result = 0; // variable servant à recevoir le résultat de l'évaluation
    // d'une question
    // Boucle de niveau 1
    foreach($this->getQuestions() as $question) {
      $question_id = strval($question->getId()); // 14=> "14"
      // Cette variable correspond au tableau de réponses cochées par le client
      // conversion de l'id en chaine de caractères afin d'établir
      // la correspondance avec la clé du tableau associatif choices
      $client_answers = $choices[$question_id]; // choices ["14"]
      var_dump($client_answers);

      // Boucle 2 sur les réponses du client
      foreach ($client_answers as $client_answer) {
        // echo 'id question: '. $question_id .' et id de la réponse ' . $client_answer . '<br>';

        // boucle 3 comparaison avec les réponses stockées dans l'objet question
        foreach($question->getAnswers() as $answer) {
          if ($answer->getId() == intval($client_answer)) {
            // on vérifie que la réponse est correcte
            if ($answer->getCorrect() == 1) {
              $result++;
            } else {
             $result--;
            }
          }
        } // fin de la boucle 3
      } // fin de la boucle 2
      if($result < 0) $result =0;
      $results += $result; // on ajoute à results (variable de cumul)
      // le résultat de la quesiton quu'on vien de traiter
      $result =0; // reinitialisation de la variable afin de la rendre
      // opérationnelle pour la question suivante
    } // fin de la boucle 1
    return $results;
  } // fin de la méthode process choices
}

?>
