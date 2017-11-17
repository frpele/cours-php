<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Retailor;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/retailor")
 */

class RetailorController extends Controller
{
    /**
     * @Route("/index", name="retailor_index")
     */
    public function indexAction()
    {

      $retailors = $this
        ->getDoctrine()
        ->getRepository(Retailor::class) // pour récupérer les données
        ->findAll();

        return $this->render('AppBundle:Retailor:index.html.twig', array(
            'retailors' => $retailors
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction(Request $request)
    {

      $retailor = new Retailor();

      $form =$this->createFormBuilder($retailor)
      ->add('name', TextType::class)
      ->add('fruit', EntityType::class, array(
        'class' => 'AppBundle:Fruit',
        'choice_label' => 'name'
      ))
      ->add('submit', SubmitType::class, array(
        'label' =>'Enregistrer'
      ))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()) {
        // hydratation automatique grâce à getData()
        $retailor = $form->getData();

      $em =$this->getDoctrine()->getManager();
      $em->persist($retailor);
      $em->flush();
      return $this->redirectToRoute('retailor_index');
      }

      return $this->render('AppBundle:Retailor:add.html.twig', array(
          'form' => $form->createView(),
        ));
    }

}
