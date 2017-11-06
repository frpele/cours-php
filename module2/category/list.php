<?php

include ('./categories.php');


function getCategoryById($categories, $id) {
  // recherche une réponse identifiée dans un tableau de réponses
  $category = NULL;
  foreach($categories as $c) {
    if ($c->id == $id) {
      $category = $c;
      break; // réponse trouvée => sortie de boucle
    }
  }
  return $category;
}

// 1 préparation de la requête Liste des catégories
// $query =$db->prepare('SELECT * FROM category ORDER BY name ASC');
// 2 Execution
// $query->execute();
//3 Récupération des données (fetch)
// $categories = $query-> fetchAll(PDO::FETCH_OBJ);

$categories = getCategories($db);


// Si on est en mode édition de categories
if (isset($_GET['edit']) && isset($_GET['id_category'])) {
    $categoryEdit = getCategoryById($categories,intval($_GET['id_category']));
  }

// click sur le bouton submit du formulaire d'insertion
if(isset($_POST['insert'])) {

// Validation des données
// trim supprime les espaces éventuels en début et fin de chaine
// strlen renvoie la longueur de la chaine
  if(strlen(trim($_POST['name'])) < 3) {

    echo 'le nom de la categorie doit comporter au moins 3 caractères';

  } else {
      $query2 = $db->prepare(
        'INSERT INTO category(name) VALUES(:name)'
        );

      $result = $query2->execute(array(
          ':name' => $_POST['name']
          ));

      ($result)
      ? header('location:?route=category/list')
      : print('L\'enregistremenet de la categorie a échoué');
  }
}

// click sur le bouton submit du formulaire de mise à jour
if (isset($_POST['update'])) {
  if(strlen(trim($_POST['name'])) < 3) {
    echo 'le nom de la categorie doit comporter au moins 3 caractères';
  } else {
    $query = $db->prepare(
      'UPDATE category
      SET name = :name
      WHERE id =  :id
      ');
    $result = $query->execute(array(
      ':name' => $_POST['name'],
      ':id' => intval($_POST['id_category'])
    ));

    ($result)
      ? header('location:?route=category/list')
      : print('La mise à jour de la categorie a échoué');
  }
}


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
        <th>Actions</th>
      </tr>
      <?php $i=0; ?>
      <?php foreach ($categories as $category): ?>
      <tr>
        <td><?=++$i ?></td>
        <td><?= ucfirst($category->name) ?></td>
        <td>
          <?php
          $urlDel = '?route=category/delete&id_category=' . $category->id;
          $urlEdit = '?route=category/list&edit=true&id_category=' . $category->id;
           ?>
          <a class="btn btn-default btn-xs"
          href=<?= $urlEdit ?>>Modifier</a>

          <a class="btn btn-danger btn-xs"
          href="<?= $urlDel ?>">Supprimer</a>

        </td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>

  <div class="col-md-4">
    <?php if(!isset($_GET['edit'])) : ?>
      <!-- Si le paramètre edit n'est pas dans l'URL on affiche -->
      <!-- le formulaire d'ajout d'une categorie -->

      <h3>Ajouter une catégorie</h3>
      <form class="" method="post" class="well">
        <div class="form-group">
          <label for="name">Intitulé de la catégorie</label><br>
          <input class="form-control" type="text" name="name" required>
        </div>

        <input type="submit" name="insert" value="Enregistrer" class="btn btn-primary">
      </form>

    <?php else: ?>
      <h3>Modifier la catégorie</h3>
      <form class="" method="post" class="well">
        <div class="form-group">
          <label for="name">Intitulé de la catégorie</label><br>
          <input class="form-control" type="text" name="name" value="<?= ucfirst($categoryEdit->name) ?>">
        </div>
        <input type="hidden" name="id_category" value="<?= $categoryEdit->id ?>">
        <input type="submit" name="update" value="Mettre à jour" class="btn btn-primary">
        <a class="btn btn-default" href="<?= '?route=category/list' ?>">Annuler</a>
      </form>
    </div>
    <?php endif ?>
</div>
