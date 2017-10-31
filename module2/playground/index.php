<?php
$db = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8','root', 'caze6294');
// $db est une objet de type PDO, il contient des propriétés
// et des méthodes permettant d'interagir avec la DB
//  var_dump($db);

$sql = 'SELECT * FROM `stagiaire`';
// $db->query($sql);
// var_dump($db);

//fetch
// lignes sql transformées en tableaux php (à la fois assoc et nom)
foreach ($db->query($sql,PDO::FETCH_OBJ) as $s) {
  // formats possible : PDO::FETCH_OBJ, PDO::FETCH_NUM, PDO::FETCH_ASSOC
  // echo '<p>NUM ' . $s['1'] . '</p>';
  // echo '<p>ASSOC ' . $s['nom'] . '</p>';
  echo '<p>OBJ ' . $s->nom . '</p>'; 

}
