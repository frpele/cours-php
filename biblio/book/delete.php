<?php

include('./Book.php');

$book = new Book($db, NULL, NULL, NULL, NULL, NULL);

if ( isset($_GET['id_book'])) {

  $id_book = intval($_GET['id_book']);

  $result = $book->deleteBook($id_book);

  ($result)
      ? header('location:?route=book/list')
      : print('<p>L\'enregistrement de la réponse a échoué</p>')
      ;
  }



 ?>
