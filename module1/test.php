<?php
include('lib/functions.php');
ini_set ('display_errors',1); // erreurs affichées dans le navigateur
?>
<?php
// test de la fonction moyenne()
//echo moyenne([12,8,10,10]);
//echo moyenne([]);
//echo moyenne([12]);
//echo '<p>' . moyenne([13,6,1]) . '</p>' ;
echo '<p>' . moyenne([13,6,1], 2) . '</p>' ;
 ?>

<p>Paragraphe</p>

<?php
// PHP est un langage à typage dynamique

// Types simples
$v ="bonjour"; // string
echo ($v);
echo '<br>';
echo majusculeInitiale($v);
echo '<br>';
echo gettype ($v);

$v =14; // integer
echo $v;
echo gettype ($v);

$v =14.7; // double
echo $v;
echo gettype ($v);

$v =true; // boolean
echo gettype ($v);

$v2; // NULL
echo gettype ($v2);

// Operations sur integer
$nb1 =45;
$nb2 =2;
$nb3 = "3";
echo $nb1 * $nb3 ; // conversion implicite de $nb3 en integer
// => 135

$str1 = "Un tien vaut mieux";
$str2 = "que deux tu l'auras";

echo "<h2>" . $str1 . " " . $str2 . "</h2>"; // concaténation

// Types complexes
// Tableaux à indice numérique (commence à 0)
$tableau = [];
echo gettype ($tableau);

$tableau2 = array();
echo gettype ($tableau2);

$etudiants = ["étudiant1", "étudiant2", "étudiant3"];
echo $etudiants[2]; // etudiant 3
$etudiants[0] = "samir"; //  accès en écriture
echo $etudiants[0];

$mix =["chaîne", 45, false, NULL, $etudiants];
echo $mix[4][0]; // Tableau à deux dimensions

// Tableaux associatifs
$joueurs = array(
  'joueur1' => array (
    'nom' => 'Messi',
    'prenom' => 'Lionel',
    'maillot' => 10
  )
);
echo "<br>";
echo $joueurs['joueur1']['prenom'];
echo "";
echo $joueurs['joueur1']['nom'];


$j1 = array('prenom' => 'Paolo', 'nom' => 'Dybala', 'maillot' => 10);
$j2 = array('prenom' => 'Giorgio', 'nom' => 'Chiellini', 'maillot' => 3);
$j3 = array('prenom' => 'Andrea', 'nom' => 'Barzagli', 'maillot' => 15);

$juve = array($j1,$j2,$j3);

// Modifier le numéro de maillot de Dybala
$j1['maillot'] = 21;
$juve[0]['maillot'] = 21;

// Structures itératives
// Boucles for
echo '<ul>';
for($i=0; $i<sizeof($juve); $i++) {
  echo '<li>' . $juve[$i]['prenom'] . ' ' . $juve[$i]['nom'] . '</li>';
}
echo '</ul>';

// Boucle While
echo '<select>';
$compteur =0;
while ($compteur < sizeof($juve)) {
echo '<option>' . $juve[$compteur]['maillot'] . '</option>';
  $compteur++;
}
echo '</select>';

// Boucle Foreach
foreach($juve as $j) {
  if ($j['maillot'] == 21) {
    echo '<p style="color:red">' . $j['nom'] . ' (meneur de jeu)</p>';
  } else {
    echo '<p>' . $j['nom'] . '</p>';
  }
}


















 ?>
