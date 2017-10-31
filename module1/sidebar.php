<?php
include_once('lib/functions.php');
include_once('datasource.php');

$stagiaires = listeStagiaires();

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

  $classement = [];

  foreach($stagiaires as $s) {
    $moyenne = moyenne($s['note'], 2);
    $nom = $s['nom'];
    array_push($classement, $moyenne);
    // $classement[$s['nom']] = $moyenne;
    rsort($classement);
    // echo '<p>' . $nom . $moyenne . '</p>';
        }
  for ($i=0; $i<3; $i++) {
  $numero = $i+1;
    if ($i == 0) {
      echo '<p class = "meilleur">Stagiaire n°' .  $numero . ', moyenne: ' . $classement[$i]. '</p>';
    } else {
      echo '<p>Stagiaire n°' .  $numero . ', moyenne: ' . $classement[$i]. '</p>';
    }
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
