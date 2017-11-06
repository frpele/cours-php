<?php

class Player {
  // Propriétés
  public $firstname ="";
  public $lastname="";
  public $team ="";

  // Méthodes (fonction à l'intérieur d'une classe)
  // appellable (collable) > mettre des parenthèses
  public function getfullName() {
    return $this->firstname . ' ' . $this->lastname;
  }
}

$player1 = new Player();
$player2= new Player();
$player3= new Player();

$player1->firstname ="Andrea"; // accès en écriture
$player1->lastname ="Pirlo";

// var_dump($player1);
// var_dump($player2);
// var_dump($player3);

echo $player1->getfullName(); // affiche Andrea Pirlo
echo $player2->getfullName();

 ?>
