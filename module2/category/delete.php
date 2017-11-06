<?php

define('URL_BASE','?route=category/list');

if ( isset($_GET['id_category'])) {

$id_category = intval($_GET['id_category']);

$query=$db->prepare(
  'DELETE FROM category
  WHERE id = :id_category
  ');

$result = $query->execute(array(
  ':id_category' =>$id_category
));

// la variable url permet de retourner sur la page
// de gestion des réponses pour la question traitée

// $url = '?route=category/list';

($result)
? header('location:' . URL_BASE)
: print ('la suppression de la catégorie a échoué');

}

?>
