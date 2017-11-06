<?php
include('./categories.php');// accès la variable categories
$categories = getCategories($db);
// var_dump($db);

  if (isset($_POST['submit'])) {

    //1 validation des données
    $cond1 = $_POST['title']    != "";
    $cond2 = $_POST['category'] != "0";
    $cond3 = $_POST['level']    != "0";
// var_dump($_POST);

    if ($cond1 && $cond2 && $cond3) {
      // toutes les conditions sont remplies
    //2 Enregistrement des données en DB

    //1. Préparation de la requête
    $query = $db->prepare(
      'INSERT INTO question(title, category, level) VALUES(:title, :category, :level)'
    );

    //2. Exécution
    $result = $query->execute(array(
      ':title'    => $_POST['title'],
      ':category' => intval($_POST['category']),
      ':level'    => intval($_POST['level'])
    ));

    if ($result) {
      // echo'<p>Enregistrement réussi</p>';
      //redirection vers la liste des questions
      header(('location:?route=question/list'));
    } else  {
      echo'<p>Enregistrement a échoué</p>';
    }

  } else {
    echo 'Une des conditions de validation n\'est pas remplie';
  }

  }
?>

<h2>Ajout d'une question</h2>

<form class="" method="post" style="width:30%">
  <div class="form-group">
      <label for="">Intitulé de la question</label>
      <input type="text" name="title" value="" class="form-control" required>
  </div>

  <div class="form-group">
      <select class="" name="category">
        <option value="0">Choisir une catégorie</option>
        <?php foreach($categories as $category):?>
          <option value="<?= $category->id ?>"><?= ucfirst($category->name) ?></option>
        <?php endforeach ?>
      </select>
  </div>

  <div class="form-group">
      <select class="" name="level">
        <option value="0">Choisir un niveau de difficulté</option>
        <option value="1">Facile</option>
        <option value="2">Moyen</option>
        <option value="3">Difficile</option>
      </select>
  </div>

  <input type="submit" name="submit" value="Enregistrer" class="btn btn-primary">


</form>
