<?php

// 1 préparation de la requête Liste des catégories
$query =$db->prepare('SELECT * FROM category ORDER BY name');

// 2 Execution
$query->execute();

//3 Récupération des données (fetch)
$categories = $query-> fetchAll(PDO::FETCH_OBJ);


// click sur le bouton submit du formulaire d'insertion
if(isset($_POST['submit'])) {

  $query2 = $db->prepare(
    'INSERT INTO category(name) VALUES(:name)'
    );

  $result = $query2->execute(array(
      ':name' => $_POST['name']
      ));

  ($result)
          ? header('location:?route=category/list')
          : print('<p>L\'enregistrement de la catégorie a échoué</p>')
          ;
}

//1. Préparation de la requête Ajouter une catégorie


// var_dump($categories);

 ?>


<h2>gestion des catégories</h2>


<div class="row">
  <div class="col-md-8">
    <h3>Liste des catégories</h3>
    <table class="table table-bordered table-striped">
      <tr>
        <th>ID</th>
        <th>Intitulé de la catégorie</th>
      </tr>
      <?php $i=0; ?>
      <?php foreach ($categories as $category): ?>
      <tr>
        <td><?=++$i ?></td>
        <td><?= ucfirst($category->name) ?></td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>

  <div class="col-md-4">
    <h3>Ajouter une catégorie</h3>
    <form class="" method="post" class="well">

      <div class="form-group">
        <label for="name">Intitulé de la catégorie</label><br>
        <input class="form-control" type="text" name="name">
      </div>

      <input type="submit" name="submit" value="Enregistrer" class="btn btn-primary">
    </form>

  </div>


</div>
