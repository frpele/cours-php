<?php
  include('datasource.php');
  include('header.php');
  include('lib/functions.php');

  $stagiaires = listeStagiaires();
?>

<h2>Fiche détaillée du stagiaire</h2>
<div class="conteneur">

<?php
//print_r($_GET); // affiche le contenu du tableau associatif $_GET
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $stagiaire = stagiaireParId($id);
  // var_dump($stagiaire); // var dump affiche infos détaillées sur la variable

  if ($stagiaire != NULL) { // si stagiaire n'est pas NULL, ni FALSE, chaine vide
    echo afficheStagiaireDetails($stagiaire);
  } else {
    echo 'Stagiaire non trouvé';

  }


} else {
echo 'Paramètre id manquant';
}

?>

<?php include('sidebar.php');?>

</div>

<?php include('footer.php');  ?>
