<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Producer;
use Symfony\Component\HttpFoundation\Request;

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
        ->add('submit', SubmitType::class, array(
          'label' =>'Enregistrer',
        ))
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()) {
          // hydratation automatique grâce à getData()
          $producer = $form->getData();

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
