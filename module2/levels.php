<?php
// Tableau des niveaux de difficulté
$levels = array (
'1' => 'Facile',
'2' => 'Moyen',
'3' =>'Difficile',

);

function getLevelName($levels, $key) {
  return $levels[$key];

}

 ?>
