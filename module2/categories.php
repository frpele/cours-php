<?php

function getCategories($db) {
  // 1 préparation de la requête Liste des catégories
  $query =$db->prepare('SELECT * FROM category ORDER BY name');

  // 2 Execution
  $query->execute();

  //3 Récupération des données (fetch)
  $categories = $query-> fetchAll(PDO::FETCH_OBJ);

  return $categories;

}




// var_dump($categories);


// Tableau des categories
// $categories  = array (
//   'Politique',
//   'Sport',
//   'Divers',
//   'Programmation',
//   'Littérature',
//   'Cuisine',
//   'Histoire',
//   'Cinéma'
//
// );

?>
