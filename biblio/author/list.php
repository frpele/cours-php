<?php

include('./Author.php');

$author = new Author($db, NULL, NULL, NULL, NULL, NULL);

$authors = $author->getAuthors();

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
        <td><?=$author->firstname ?></td>
        <td><?=$author->lastname ?></td>
        <td><?=$author->birth_year ?></td>
        <td><?=$author->country ?></td>
        <td>
          <a
          href="#"
          class="btn btn-primary btn-xs">Modifier</a>
          <a
          href="#"
          class="btn btn-danger btn-xs">Supprimer</a>

        </td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>

  <div class="col-md-4">
    <h3>Ajouter un auteur</h3>
  </div>
