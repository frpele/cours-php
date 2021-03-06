<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Fruit;
use AppBundle\Entity\Producer;
use AppBundle\Entity\Category;


/**
* @Route("fruits")
*/

class FruitController extends Controller {

  /**
  * @Route("/", name="fruit_admin_page")
  */
  public function indexAction(Request $r) {
    // var_dump($request);
    $post = $r->request;
    // echo $post->get('name');
    // echo $r->request->get('origin');

    if ($r->getMethod() == 'POST') {
      $name = $post->get('name');
      $origin = $post->get('origin');
      $comestible = $post->get('comestible');
      $producer_id = $post->get('producer_id');

      // On récuprère un tableau d'identifiants de catégetDoctrine
      // exemple : ["1", "4"] correspondants aux cases cochées

      $categories_posted = $post->get('categories');


      // récupérer l'objet producer complet à partir d'un id
      $producer = $this->getDoctrine()
      ->getRepository(Producer::class)->find($producer_id);

      // Vérification du contenu de la variable $comestible
      $comestible = ($comestible) ? 1 : 0;

      $fruit = new Fruit();

      // hydratation
      // récupérer les objets category complets à partir d'un id
      //A chache passage, création d'un objet de type category
      if ($categories_posted !== NULL) {
        // L'utilisateur a coché au moins une case de catégorie
        foreach ($categories_posted as $c) {
          $category = $this->getDoctrine()
          ->getRepository(Category::class)->find($c);
          // Alimentation de la propriété category de l'objet fruit
          $fruit->addCategory($category);
        }
      }
      $fruit->setName($name);
      $fruit->setOrigin($origin);
      $fruit->setComestible($comestible);
      $fruit->setProducer($producer);


      // Utilisation du EntityManager
      $em = $this
      ->getDoctrine()
      ->getManager(); // pour toutes les opérations d'écriture (insertion, modification, suppression)

      $em->persist($fruit); // prépare la requete en insertion
      // mais n'éxecute aucune requete sql
      $em->flush(); // execute toutes les requetes sql

    }

    // Récupération des fruits
    // Fruit::class retourne chemin + nomde la classe
    // getRepository pour les opérations de lecture
    $fruits = $this
      ->getDoctrine()
      ->getRepository(Fruit::class) // pour récupérer les données
      ->findAll();

    $producers = $this
        ->getDoctrine()
        ->getRepository(Producer::class) // pour récupérer les données
        ->findAll();
        // ->findAllNotAssigned();

    $categories = $this
        ->getDoctrine()
        ->getRepository(Category::class) // pour récupérer les données
        ->findAll();

    return $this->render('fruit/index.html.twig', array(
      'fruits' => $fruits,
      'producers' => $producers,
      'categories' => $categories
    ));

  }

  /**
  * @Route("/delete/{id}", name="fruit_delete")
  */
  public function deleteAction($id) {
    // l'argument id correspond au parametre id defini
    // au niveau de l'annotation Route
    $fruit = $this
      ->getDoctrine()
      ->getRepository(Fruit::class) // pour récupérer les données
      ->find($id);

    $em = $this->getDoctrine()->getManager();

    $em->remove($fruit); // requete en attente
    $em->flush(); // execute toutes les requetes sql en attente

    return $this->redirectToRoute('fruit_admin_page');

    // return new Response("ID du fruit à supprimer: " . $id);
  }

  /**
  * @Route("/update/{id}", name="fruit_update")
  */
  public function updateAction($id,Request $request) {
    // Ici : l'objet fruit est crée sans le notifier au Manager :
    // $fruit = $this->getDoctrine()->getRepository(Fruit::class)->find($id);

    // Variante : appeler getRepository après le getManager établit une visibilité
    // entre le repo et le manager. Ici le Manager est notifié de l'existence
    // de l'objet Fruit. Si cet objet change (reçoit de nouvelles valeurs)
    // Le manager le sait. Le manager 'surveille' cet objet.

    $em = $this->getDoctrine()->getManager();
    $fruit = $em->getRepository(Fruit::class)->find($id);

    if ($request->getMethod() == 'POST') {

      // $fruit_updated = new Fruit();
      $fruit->setName($request->request->get('name'));
      $fruit->setOrigin($request->request->get('origin'));

      $comestible = ($request->request->get('comestible')) ? 1 : 0 ;
      $fruit->setComestible($comestible);

      // $em = $this->getDoctrine()->getManager();
      $em->flush(); // Si l'objet a reçu de nouvelles valeurs, le manager execute
      // la requete appropriée
      return $this->redirectToRoute('fruit_admin_page');

      }

    return $this->render('fruit/update.html.twig', array(
      'fruit' => $fruit
      ));
  }

  /**
  * @Route("/{id}", name="fruit_details")
  */
  public function detailsAction($id) {
    // Récupérer un objet fruit à partir de son identifiant

    $fruit = $this->getDoctrine()->getRepository(Fruit::class)->findOneById($id);


    return $this->render('fruit/details.html.twig', array(
      'fruit' => $fruit
      ));

  }

  /**
   * @Route("/category/{name}")
  */
  public function byCategoryAction($name) {
    $fruits = $this->getDoctrine()
      ->getRepository(Fruit::class)
      ->findByCategoryName($name);

    return $this->render('fruit/by-category.html.twig', array(
      'fruits' => $fruits,
      'name' => $name
    ));
  }

  /**
   * @Route("/api/details/{i}")
  */
  public function viewDetails($id) {
    $fruits = $this->getDoctrine()
    ->getRepository(Fruit::class)
    ->findOneById($id);

    $fruits_assoc = [];
    foreach($fruits as $fruit) {

        $fruit_assoc = [
          'id'        =>    $fruit->getId(),
                    ];
        $fruits_assoc[] = $fruit_assoc; // équivalent d'un array_push
      }

    // encodage en JSON du tableau associatif
    $fruits_json = json_encode($fruits_assoc);

    return new Response($fruits_json);
  
  }


  /**
   * @Route("/api/json")
  */
  public function jsonAction() {
    $fruits = ['pomme', 'poire', 'cerise'];
    $fruit = [
      'name'=>'Cerise',
      'origin'=>'France',
      'comestible'=>true,
      'category' => [
        array('name' => 'Cuisine'),
        array('name' => 'Voyage')
      ]
  ];

    // conversion du tableau PHP en chaîne de caractères JSON
    $fruits_json = json_encode($fruit);

    return new Response($fruits_json);
  }

  /**
   * @Route("/api/client")
  */
  public function clientAction() {
    return $this->render('client.html.twig');
  }

  /**
   * @Route("/api/list")
  */
  public function ajaxListFruitsAction() {
    $fruits = $this->getDoctrine()
    ->getRepository(Fruit::class)
    ->findAll();

    // tentative d'encodage en json
    // Problème json_encode ne peut pas encoder des objets PHP
    //json encode fonctionne avec des tableaux associatifs

    // transformation d'objets fruits en tableaux associatifs
    $fruits_assoc = [];
    foreach($fruits as $fruit) {

        $fruit_assoc = [
          'id'        =>    $fruit->getId(),
          'name'        =>  $fruit->getName(),
          'origin'      =>  $fruit->getOrigin(),
          'comestible'  =>  $fruit->getComestible(),
                    ];

        if ($fruit->getProducer()) {
          $fruit_assoc['producer'] = $fruit->getProducer()->getName();
          }

        $fruits_assoc[] = $fruit_assoc; // équivalent d'un array_push
      }

    // encodage en JSON du tableau associatif
    $fruits_json = json_encode($fruits_assoc);

    return new Response($fruits_json);

  }

}
