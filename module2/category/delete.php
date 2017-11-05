<?php

if ( isset($_GET['id_category'])) {

$id_category = $_GET['id_category'];


$query=$db->prepare(
  'DELETE FROM category
  WHERE id = :id_category
  ');

$result = $query->execute(array(
  ':id_category' =>$id_category
));

// la variable url permet de retourner sur la page
// de gestion des réponses pour la question traitée

$url = '?route=category/list';

($result)
? header('location:' . $url)
: print ('la suppression de la catégorie a échoué');

}

?>
