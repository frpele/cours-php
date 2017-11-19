<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Book;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/book")
 */

class BookController extends Controller
{
    /**
     * @Route("/index", name="book_admin_page")
     */
    public function indexAction()
    {
      $books = $this
        ->getDoctrine()
        ->getRepository(Book::class) // pour récupérer les données
        ->findAll();

        return $this->render('AppBundle:Book:index.html.twig', array(
            'books' => $books
        ));
    }

    /**
     * @Route("/add", name="book_add_page")
     */
    public function addAction(Request $request)
    {

      $book = new Book();

      $form =$this->createFormBuilder($book)
      ->add('title', TextType::class)
      ->add('isbn', TextType::class)
      ->add('pages', TextType::class)
      ->add('author', EntityType::class, array(
        'class' => 'AppBundle:Author',
        'choice_label' => 'lastname'
      ))
      ->add('submit', SubmitType::class, array(
        'label' =>'Enregistrer'
      ))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()) {
        // hydratation automatique grâce à getData()
        $book = $form->getData();

      $em =$this->getDoctrine()->getManager();
      $em->persist($book);
      $em->flush();
      return $this->redirectToRoute('book_admin_page');
      }
        return $this->render('AppBundle:Book:add.html.twig', array(
            'form' =>$form->createView()
        ));
    }

    /**
     * @Route("/edit/{id}", name="book_edit_page")
     */
    public function editAction($id,Request $request)
    {

      $em = $this->getDoctrine()->getManager();
      $book = $em->getRepository(Book::class)->find($id);

      $form =$this->createFormBuilder($book)
      ->add('title', TextType::class)
      ->add('isbn', TextType::class)
      ->add('pages', TextType::class)
      ->add('author', EntityType::class, array(
        'class' => 'AppBundle:Author',
        'choice_label' => 'lastname'
      ))
      ->add('submit', SubmitType::class, array(
        'label' =>'Modifier'
      ))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()) {
        // hydratation automatique grâce à getData()
        $book = $form->getData();

        // enregistrement en bdd
        $em =$this->getDoctrine()->getManager();
        $em->persist($book);
        $em->flush();
        return $this->redirectToRoute('book_admin_page');

      }

      return $this->render('AppBundle:Book:edit.html.twig', array(
              'form' =>$form->createView()
        ));
    }

    /**
     * @Route("/delete/{id}", name="book_delete_page")
     */
    public function deleteAction($id)
    {
      $book = $this
        ->getDoctrine()
        ->getRepository(Book::class) // pour récupérer les données
        ->find($id);

      $em = $this->getDoctrine()->getManager();

      $em->remove($book); // requete en attente
      $em->flush(); // execute toutes les requetes sql en attente

      return $this->redirectToRoute('book_admin_page');
    }

}
