<?php

include('./Author.php');
include('AuthorManager.php');

// $author = new Author($db, NULL, NULL, NULL, NULL);
// $authors = $author->getAuthors();

$author_manager = new AuthorManager($db);
if (isset($_POST['submit'])) {
  // $result = $author->addAuthor();// retourne un tableau d'objets books
  $author = new Author(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['birth_year'],
    $_POST['country']
  );

  // On fournit l'objet $author au manager pour des opération en BD
  // et teste le cas échec
  if($author_manager->save($author) == 0)
    echo '<p>L\'enregistrement de la réponse a échoué</p>';



  // ($result)
  //   ? header('location:?route=author/list')
  //   : print('<p>L\'enregistrement de la réponse a échoué</p>')
  //   ;
}


// Action sur auteur
if (isset($_GET['action'])) {
  $action = $_GET['action'];
  $author_id = $_GET['id'];
  // Suppression
  if ($action =='delete')  {
    if ($author_manager->deleteById($author_id) == 0)
    echo '<p>L\'enregistrement de la réponse a échoué</p>';
    }
}

$authors =$author_manager->list();

?>

<h2>Gérer les auteurs</h2>

<div class="row">
  <div class="col-md-8">
    <h3>Liste des auteurs</h3>
    <table class="table table-bordered table-striped">
      <tr>
        <th>ID</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Année de naissance</th>
        <th>Pays</th>
        <th>Actions</th>
      </tr>
      <?php $i=0; ?>
      <?php foreach ($authors as $author): ?>

      <tr>
        <td><?= ++$i ?></td>
        <td><?=$author->getFirstname() ?></td>
        <td><?=$author->getLastname() ?></td>
        <td><?=$author->getBirthYear() ?></td>
        <td><?=$author->getCountry() ?></td>
        <td>
          <a
          href="#"
          class="btn btn-primary btn-xs">Modifier</a>
          <a
            class="btn btn-danger btn-xs"
            href="?route=author&action=delete&id=<?= $author->getId() ?>">
            Supprimer</a>

        </td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>

  <div class="col-md-4">
    <h3>Ajouter un auteur</h3>
    <form method="POST">

      <div class="form-group">
        <label>Prénom de l'auteur</label>
        <input type="text" class="form-control" name="firstname" required>
      </div>

      <div class="form-group">
        <label>Nom de l'auteur</label>
        <input type="text" class="form-control" name="lastname" required>
      </div>

      <div class="form-group">
        <label>Année de naissance</label>
        <input type="text" class="form-control" name="birth_year" required>
      </div>

      <div class="form-group">
        <label>Pays</label>
        <input type="text" class="form-control" name="country" required>
      </div>
      <input type="submit" class="btn btn-primary" value="Enregistrer" name="submit">

    </form>


  </div>
