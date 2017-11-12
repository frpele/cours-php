<?php
include('./Book.php');
include('./Author.php');

$author = new Author($db, NULL, NULL, NULL, NULL, NULL);


$authors = $author->getAuthors();

if (isset($_POST['submit'])) {


  var_dump($_POST);
  $book = new Book($db, NULL, NULL, NULL, NULL, NULL);
  $result = $book->addBook();// retourne un tableau d'objets books

  ($result)
      ? header('location:?route=book/list')
      : print('<p>L\'enregistrement de la réponse a échoué</p>')
      ;
}



 ?>

<h2>Ajouter un livre</h2>

<form style="width:30%" method="POST">

  <div class="form-group">
    <label>Titre du livre</label>
    <input type="text" class="form-control" name="title" required>
  </div>

  <div class="form-group">
      <select class="" name="id_author">
        <option value="0">Sélectionnez un auteur</option>
        <?php foreach($authors as $author):?>
          <option value="<?= $author->id ?>"><?= ucfirst($author->lastname) ?></option>
        <?php endforeach ?>
      </select>
  </div>

  <div class="form-group">
    <label>ISBN</label>
    <input type="text" class="form-control" name="isbn" required>
  </div>

  <div class="form-group">
    <label>Nombre de pages</label>
    <input type="text" class="form-control" name="pages" required>
  </div>


  <input type="submit" class="btn btn-primary" value="Enregistrer" name="submit">

</form>
