<?php

class BookManager {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function list() {
    $query = $this->db->prepare
       ('SELECT *
         FROM book
         ORDER BY title ASC
       ');
    $query->execute();

    $results = $query-> fetchAll(PDO::FETCH_OBJ);
    $books =array();
    // transformation des résultats sql en objet de type book
    foreach($results as $r) {
      // A chaque itération nous créeons un nouvel objet book

      $book = new Book($r->title,$r->isbn,$r->pages);
      // nous renseignons également l'id de l'author via le setter approprié
      $book->setId($r->id);
      $book->setAuthor()->setId($r->author);

      // ajout de l'author dans le tableau
      array_push($books, $book);
      }
      return $books;
  }

  public function deleteById($id) {
    // à faire
  }



  public function save(Book $book) {
    $query = $this->db->prepare
     ('INSERT INTO book (title, pages, isbn, id_author)
     VALUES (:title, :pages, :isbn, :author)' // placeholders
      );
      // Afin d'être en conformiaté avec les données attendues par sql
      // La colonne book.author attend un INT, on execute la méthode getId()
      //de l'objet Auteur renvoyé par book

    $result = $query->execute(array(
      ':title'  => $author->getTitle(),
      ':pages'   => $author->getPages(),
      ':isbn' => $author->getIsbn(),
      ':author'    => $author->getAuthor()->getId()
        ));

    return $result;
  }
}
 ?>
