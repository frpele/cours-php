<?php

include('./Book.php');

$book = new Book($db, NULL, NULL, NULL, NULL, NULL);

$books = $book->getBooks();// retourne un tableau d'objets books


 ?>

<h2>Liste des livres</h2>

<table class="table table-bordered table-striped">
  <tr>
    <th>ID</th>
    <th>Titre</th>
    <th>Auteur</th>
  </tr>
<?php $i=0; ?>
<?php foreach ($books as $book): ?>

<tr>
  <td><?= ++$i ?></td>
  <td><?=$book->title ?></td>
  <td><?=$book->author ?></td>
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
