<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


/**
 * @Route("/retailor")
 */

class RetailorController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Retailor:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('AppBundle:Retailor:add.html.twig', array(
            // ...
        ));
    }

}
