<?php
namespace AppBundle\Repository;
/**
 * FruitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FruitRepository extends \Doctrine\ORM\EntityRepository
{
  // nous ajouterons ici nos méthodes personnalisées de
  // récupération de données
  public function findByCategoryName($name) {
    // requête valable dans le cas d'une association OneToOne
    // Ici, puisque f.category renvoie un tableau, il n'est pas possible
    // de cibler une propriété .name (inexistante)
    $query =
      'SELECT f FROM AppBundle:Fruit f WHERE f.category.name = \'Cuisine\'';
    // Il faut trouver un moyen de cibler la propriété .name des objets
    // de type Category situés à l'intérieur du tableau f.category
    // DQL fournit-il une solution ??? Christophe mène l'enquête

    $query =
    'SELECT f FROM AppBundle:Fruit f
    JOIN f.category c
    WHERE c.name = :name
    ORDER BY NAME ASC
    ';


    return $this->getEntityManager()
      ->createQuery($query)
      ->setParameter(':name', $name)
      ->getResult();
  }
}
