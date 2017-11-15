<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Fruit;


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

      // Vérification du contenu de la variable $comestible
      $comestible = ($comestible) ? 1 : 0;

      $fruit = new Fruit();
      // hydratation
      $fruit->setName($name);
      $fruit->setOrigin($origin);
      $fruit->setComestible($comestible);

      // Utilisation du EntityManager

      $em = $this->getDoctrine()->getManager();
      $em->persist($fruit); // prépare la requete en insertion
      // mais n'éxecute aucune requete sql
      $em->flush();

    }

    // Récupération des fruits
    // Fruit::class retourne chemin + nomde la classe
    // getRepository pour les opérations de lecture

    $fruits = $this
      ->getDoctrine()
      ->getRepository(Fruit::class)
      ->findAll();

    return $this->render('fruit/index.html.twig', array(
      'fruits' => $fruits

      ));
  }

  /**
  * @Route("/delete/{id}", name="fruit_delete")
  */
  public function deleteAction($id) {
    // l'argument id correspond au parametre id defini
    // au niveau de l'annotation Route
    return new Response("ID du fruit à supprimer: " . $id);
  }
}
