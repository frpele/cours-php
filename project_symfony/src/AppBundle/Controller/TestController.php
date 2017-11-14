<?php

// chemin
namespace AppBundle\Controller;

//include
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Classes\Fruit;

class TestController extends Controller {

  private $message ="Petit message";

  public $fruits = ['pèche','pomme', 'poire', 'abricot'];

  private $fruits2 = array(
    array('name' => 'Mangue','origin' => 'Amérique du Sud','comestible'=>true),
    array('name' => 'Banane','origin' => 'Guadeloupe','comestible'=>true),
    array('name' => 'Ananaze','origin' => 'Tchernobyl','comestible'=>false),
  );

// Erreur, on ne peut pas instancier la classe Fruit à cet endroit.
// Il faut se placer dans le constructeur de TestController
// pour réussir cette instanciation
  // private $fruits3 = array(
  //   new Fruit('Orange', 'Sicile', true),
  //   new Fruit('Tromate', 'Suceava', false),
  //   new Fruit('Citron', 'Bari', true),
  // );
  private $fruits3; // Déclaration sans assignation
  // L'assignation se fera sereinement dans le constructeur

  public function __construct() {
    $this->fruits3 = array(
      new Fruit('Orange', 'Sicile', true,'https://fr.wikipedia.org/wiki/Orange'),
      new Fruit('Tromate', 'Suceava', false, NULL),
      new Fruit('Citron', 'Bari', true,'https://fr.wikipedia.org/wiki/Citron'),
     );
  }



  public function getMessage() {
    return $this->message;
  }

  private function getFruitsList() {
    $output ="<ul>";
    foreach($this->fruits as $fruit) {
      $output .="<li>" . $fruit . "</li>" ;
    }
    $output .="</ul>";
    return $output;
  }

  /**
  * @Route("/example")
  */
  public function exampleAction() {
    $res1 = new Response("Toto");
    $res2 = new Response("<h1>Toto</h1>"); // retour non valide,
    $res3 = new Response($this->getMessage());
    // $res4 = new Response($this->fruits); // erreur, on ne peut pas envoyer au client
    // une structure php non convertible en string
    // un entier, un string est facilement convertible, pas un tableau
    //il faut retourner un objet de type Response
    // $res5 = new Response($this->getFruitsList());
    // return $res5;
    return $this->render('test/example.html.twig', array(
      'fruits' => $this->fruits3,
    ));
  }

  /**
  * @Route("/fruits/list")
  */
  public function fruitsListAction() {
    $res5 = new Response($this->getFruitsList());
    return $res5;
  }

  /**
  * @Route("/fruits/static")
  */
  public function fruitsStaticAction() {
    // renvoie fichier html statique
    return $this->render('test/fruits.html');
  }

  /**
  * @Route("/fruits")
  */
  public function fruitsAction() {
    // renvoie fichier dynamique twig
    // le 2ème argument de la méthode .render est un tableau associatif
    // permettant de fournir à la vue tout type de données

    return $this->render('test/fruits.html.twig', array(
      'title'   =>'Liste de fruits',
      'message' => $this->getMessage(),
      'fruits'  => $this->fruits,
      'toto'    => NULL,
      'fruits2'  => $this->fruits2,
      'fruits3'  => $this->fruits3,
    ));
  }

}
