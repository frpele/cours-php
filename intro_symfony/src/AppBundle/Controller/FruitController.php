<?php

// chemin
namespace AppBundle\Controller;

//include
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FruitController extends Controller {

  /**
  * @Route("/admin/fruits", name="fruit_admin_page")
  */

  public function indexAction() {
    return $this->render('fruit/index.html.twig', array(

    ));

  }
}