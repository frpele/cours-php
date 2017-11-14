<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction(Request $request)
    {
        $v1 = "Toto";
        $v2 = "Tata";
        if ($v1 == 'Toto') {
          echo "Toto";
        } else {
          echo "Tata";
        }
        return $this->render('default/index.html.twig');
    }
}
