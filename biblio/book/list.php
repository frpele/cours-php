<?php

// include('./Book.php');
// $book = new Book($db, NULL, NULL, NULL, NULL, NULL);
// $books = $book->getBooks();// retourne un tableau d'objets books
include_once('./Author.php');
include_once('./author/AuthorManager.php');

include_once('./Book.php');
include_once('./book/BookManager.php');

$author_manager = new AuthorManager($db);
$authors = $author_manager->list();
$book_manager = new BookManager($db); // gestionnaire de livres

$books = $book_manager->list();
$author = $authorManager->getById($book->author);
$book->setAuthor($author);

if (isset($_POST['submit'])) {
  // créer on objet de type de Book
  $book = new Book(
    $_POST['title'],
    $_POST['isbn'],
    intval($_POST['nb_pages'])
  );

  $author = $authorManager->getById(intval($_POST['author']));
  $book->setAuthor($author);

}

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
  <td><?=$book->getTitle() ?></td>
  <td><?=$book->getAuthor() ?></td>
  <td>
    <a
    href="#"
    class="btn btn-primary btn-xs">Modifier</a>
    <a
    href="?route=book/delete&id_book=<?= $book->id ?>"
    class="btn btn-danger btn-xs">Supprimer</a>

  </td>
</tr>

<?php endforeach ?>
