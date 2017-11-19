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
        return $this->render('AppBundle:Book:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/add", name="book_add_page")
     */
    public function addAction()
    {
        return $this->render('AppBundle:Book:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('AppBundle:Book:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Book:delete.html.twig', array(
            // ...
        ));
    }

}
