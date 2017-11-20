<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use AppBundle\Entity\Producer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/producer")
 */

class ProducerController extends Controller
{
    /**
     * @Route("/index", name="producer_index")
     */
    public function indexAction()
    {
      $producers = $this
        ->getDoctrine()
        ->getRepository(Producer::class) // pour récupérer les données
        ->findAll();

        return $this->render('AppBundle:Producer:index.html.twig', array(
          'producers' => $producers
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction(Request $request)
      {
        // Création d'un objet vide
        $producer = new Producer();
        // La méthode createFormBuilder permet de créer un form en pure POO
        // pas de balise html

        $form =$this->createFormBuilder($producer)
        ->add('name', TextType::class)
        ->add('email', TextType::class)
        ->add('submit', SubmitType::class, array(
          'label' =>'Enregistrer',
        ))
        ->getForm();

        $form->handleRequest($request);

        // La méthode isValid est en relation avec les annotations
        //@Assert, elle vérifie l'ensemble des conditions
        if($form->isSubmitted() && $form->isValid()) {
          // hydratation automatique grâce à getData()
          $producer = $form->getData();

          // Validation de données

          $str_len = strlen($producer->getName());
          $min = 3;
          $max = 10;
          $cond1 = $str_len >= $min;
          $cond2 = $str_len <= $max;
          $total_cond = $cond1 && $cond2;
          $message ="Il faut au moins ";
          $message .= $min ." caractères et au plus ";
          $message .= $max ." caractères";


          if (!$total_cond) return new Response($message);


          // enregistrement en bdd
          $em =$this->getDoctrine()->getManager();
          $em->persist($producer);
          $em->flush();


          return $this->redirectToRoute('producer_index');

        }

        return $this->render('AppBundle:Producer:add.html.twig', array(
            'form' =>$form->createView()

            ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
      {
          return $this->render('AppBundle:Producer:edit.html.twig', array(
              // ...
          ));
      }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Producer:delete.html.twig', array(
            // ...
        ));
    }

    /**
    * @Route("/{id}", name="producer_details")
    */
    public function detailsAction($id) {
      // Récupérer un objet producer à partir de son identifiant

      $producer = $this->getDoctrine()->getRepository(Producer::class)->findOneById($id);


      return $this->render('AppBundle:Producer:details.html.twig', array(
        'producer' => $producer
        ));

    }

}
