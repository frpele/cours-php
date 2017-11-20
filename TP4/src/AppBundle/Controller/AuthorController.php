<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Author;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/author")
 */

class AuthorController extends Controller
{
    /**
     * @Route("/index", name="author_admin_page")
     */
    public function indexAction()
    {
      $authors = $this
        ->getDoctrine()
        ->getRepository(Author::class) // pour récupérer les données
        ->findAll();

        return $this->render('AppBundle:Author:index.html.twig', array(
          'authors' => $authors
        ));
    }

    /**
     * @Route("/add", name="author_add_page")
     */
    public function addAction(Request $request)
    {
      // Création d'un objet vide
      $author = new Author();
      // La méthode createFormBuilder permet de créer un form en pure POO
      // pas de balise html

      $form =$this->createFormBuilder($author)
      ->add('firstname', TextType::class)
      ->add('lastname', TextType::class)
      ->add('birth_year', TextType::class)
      ->add('country', TextType::class)
      ->add('submit', SubmitType::class, array(
        'label' =>'Enregistrer',
      ))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()) {
        // hydratation automatique grâce à getData()
        $author = $form->getData();

        // enregistrement en bdd
        $em =$this->getDoctrine()->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute('author_admin_page');

      }

      return $this->render('AppBundle:Author:add.html.twig', array(
          'form'    =>$form->createView()

          ));
  }

    /**
     * @Route("/edit/{id}", name="author_edit_page")
     */
    public function editAction($id,Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $author = $em->getRepository(Author::class)->find($id);

      $form =$this->createFormBuilder($author)
      ->add('firstname', TextType::class)
      ->add('lastname', TextType::class)
      ->add('birth_year', TextType::class)
      ->add('country', TextType::class)
      ->add('submit', SubmitType::class, array(
        'label' =>'Modifier',
      ))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()) {
        // hydratation automatique grâce à getData()
        $author = $form->getData();

        // enregistrement en bdd
        $em =$this->getDoctrine()->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute('author_admin_page');

      }

        return $this->render('AppBundle:Author:edit.html.twig', array(
            'form' =>$form->createView(),
            'author'=>$author
        ));
    }

    /**
     * @Route("/delete/{id}", name="author_delete_page")
     */
    public function deleteAction($id)
    {

      $author = $this
        ->getDoctrine()
        ->getRepository(Author::class) // pour récupérer les données
        ->find($id);

      $em = $this->getDoctrine()->getManager();

      $em->remove($author); // requete en attente
      $em->flush(); // execute toutes les requetes sql en attente

      return $this->redirectToRoute('author_admin_page');


    }


}
