<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
  echo $post->get('name');
  echo $r->request->get('origin');

  if ($r->getMethod() == 'POST') {
    $name = $post->get('name');
    $origin = $post->get('origin');
    $comestible = $post->get('comestible');

    // Vérification du contenu de la variable $comestible
    if($comestible) {
      $comestible = 1;
    } else {
      $comestible = 0;
    }

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

  // suite : créer un objet fruit, le transmettre à un manager
  // pour l'enresgistrment en db

  // var_dump($post);
  return $this->render('fruit/index.html.twig', array(
    ));
  }
}
