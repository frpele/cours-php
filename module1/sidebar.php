<?php
include_once('lib/functions.php');
include_once('datasource.php');

$stagiaires = listeStagiaires();
// var_dump($stagiaires);

// echo meilleurStagiaire(listeStagiaires())['stagiaire']['nom'];
$meilleurs = meilleursStagiaires(listeStagiaires(),5);

// var_dump(demo());
// var_dump(meilleurStagiaire($stagiaires));
?>



<div class="sidebar" >
  <h4>Les 3 meilleurs stagiaires</h4>
  <!-- <p style="font-size:1.5em; color:green">Stagiaire X (19,5)</p>
  <p>Stagiaire Y (17)</p>
  <p>Stagiaire X (16,2)</p> -->
  <?php

$moyennes = array();
$noms =  array();
foreach($stagiaires as $s) {
    $moyenne = moyenne($s['note'], 2);
    $nom = $s['nom'];
    array_push($moyennes,$moyenne);
    array_push($noms, $nom);
}

$classement = array_combine($noms,$moyennes);
arsort($classement);


$i =1;
foreach($classement as $stagiaire => $note) {
  if ($i == 1) {
  echo '<p class = "meilleur">Stagiaire n°' . $i . ': ' . majusculeInitiale($stagiaire) .' (' . $note . ')</p>';
} else {
  echo '<p>Stagiaire n°' . $i . ': ' . majusculeInitiale($stagiaire) .' (' . $note . ')</p>';
}
  $i++; // on boucle;
  if ($i == 4) break; // on arrète avant le 4ème;
}


?>
  <ul>
    <?php
    $i=0;
  foreach ($meilleurs as $m) {

    if ($i == 0) {
      echo '<li class="meilleur">' . $m['stagiaire']['nom'] . ' (' .  $m['moyenne'] . ')</li>';
    } else {
      echo '<li>' . $m['stagiaire']['nom'] . ' (' .  $m['moyenne'] . ')</li>';

    }
    $i++;
  }
  ?>
  </ul>

</div>
