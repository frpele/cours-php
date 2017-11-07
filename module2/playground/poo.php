<?php

include('Color.php') ; // inclusion de la classe Color
include_once('Product.php');
include_once('Book.php');
include_once('Weapon.php');

class Player {
  // Propriétés
  public $firstname ="";
  public $lastname="";
  public $team ="";
  public $age =NULL;

  // Méthodes (fonction à l'intérieur d'une classe)
  // appellable (collable) > mettre des parenthèses
  public function getfullName() {
    return $this->firstname . ' ' . $this->lastname;
  }

  public function ageAfterTenYears() {
    return $this->age+10;
  }

  public function ageAfterTenYearsAlter() {
    $this->age+=10;
    return $this->age;
  }

  public function ageAfterNbYears($nbYears) {
    return $this->age+$nbYears; // valeur modifiée
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

// echo $player1->getfullName(); // affiche Andrea Pirlo
// echo $player2->getfullName();
//
// $player1->age =56;
// echo $player1->ageAfterTenYears();// affiche 66
// echo $player1->ageAfterNbYears(25); //affiche 81 (56+25)
//
// echo $player1->ageAfterTenYearsAlter();  // affiche 66
// echo $player1->ageAfterNbYears(25); // affiche 91

$color1 =new Color("red");
$color2 =new Color("orange");
echo $color1->colorHuman;
echo '<p></p>';
echo $color2->colorHuman;

// echo $color1->convertToHexa(); // FF0000
// echo $color1->convertToRgb(); //
// echo $color1->colors;

$product1 = new Product("Tondeuse");
$product1->setPrice(14.6);
$product1->setAvailable(true);
// var_dump($product1);
// echo $product1->CONSTANTE_DE_CLASSE; impossible !!!!!!

// echo Product::CONSTANTE_DE_CLASSE;
// echo $product1->test;
// echo $product1->test2;

echo '<p></p>';

$book1 =new Book("Le Père Goriot");
// $book1->setPrice(5.40);
$book1->setAvailable(false);
$book1->setNbPages(450);
// var_dump($book1);
// echo $book1->getPrice();
// echo $book1->test;
// echo $book1->test2; // Fatal error : propriété protégée
// echo $book1->getTest2();
echo '<p></p>';
//
$weapon1 = new Weapon("Couteau");
$weapon1->setPrice(60);
$weapon1->setAvailable(true);
$weapon1->setCategory(6);
// var_dump($weapon1);
echo '<p></p>';
 ?>
