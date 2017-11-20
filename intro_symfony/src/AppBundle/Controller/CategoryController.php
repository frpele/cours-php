<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/category")
 */

class CategoryController extends Controller
{
    /**
     * @Route("/index", name="category_index")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Category:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction(Request $request)
    {

      $category = new Category();

      $form =$this->createFormBuilder($category)
      ->add('name', TextType::class)
      ->add('submit', SubmitType::class, array(
        'label' =>'Enregistrer'
      ))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()) {
        // hydratation automatique grâce à getData()
        $category = $form->getData();

      $em =$this->getDoctrine()->getManager();
      $em->persist($category);
      $em->flush();
      return $this->redirectToRoute('category_index');
      }

      return $this->render('AppBundle:Category:add.html.twig', array(
          'form' => $form->createView(),
        ));
    }

}
