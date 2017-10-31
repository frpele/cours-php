<?php
include('header.php');
include('datasource.php');
include('lib/functions.php');

// print_r($_SERVER);
$method = $_SERVER['REQUEST_METHOD'];
// echo $method;

if ($method == 'POST') {

  if ($_POST['nom'] == "") {
    echo '<p>Prière d\'indiquer un nom</p>';
  }


  if (verifieIdentite($_POST,listeStagiaires())) {
    echo'Bonjour ' . $_POST['nom'];
  } else {
    echo 'Stagiaire inconnu';
  }
}

?>
<h2>Connexion</h2>


<div class="conteneur_connexion">

      <form class="sign-in" method="post">
        <h2 >Identifiez-vous</h2>

        <div class="form-group">
          <label for="">votre nom</label><br>
          <input class="form-control" type="text" name="nom" value="">
        </div>

        <div class="form-group">
          <label for="">votre mot de passe</label><br>
          <input class="form-control" type="password" name="password" value="">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button id="bouton" type="submit">valider</button>
      </form>

    </div>


  <?php
  include('footer.php');
  ?>
