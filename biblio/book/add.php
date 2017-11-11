<?php
include('./Book.php');

// if (isset($_POST['submit'])) {
  //var_dump($_POST);
  // on reconstitue l'objet $book "perdu" en raison de la nouvelle
  // requête HTTP
  // $book = new Book(
//     $db,
//     $id,
//     $_POST['title'],
//     $_POST['isbn'],
//     $_POST['pages'],
//     $_POST['id_author']
//   );
// }

 ?>

<h2>Ajouter un livre</h2>

<form style="width:30%" method="POST">

  <div class="form-group">
    <label>Titre du livre</label>
    <input type="text" class="form-control" name="title" required>
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
