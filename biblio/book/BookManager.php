<?php

class BookManager {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function list() {
    $query = $this->db->prepare
       ('SELECT *
         FROM author
         ORDER BY lastname ASC
       ');
    $query->execute();

    $results = $query-> fetchAll(PDO::FETCH_OBJ);
    $authors =array();
    // transformation des résultats sql en objet de type author
    foreach($results as $r) {
      // A chaque itération nous créeons un nouvel objet Author

      $author = new Author($r->firstname,$r->lastname,$r->birth_year,$r->country);
      // nous renseignons également l'id de l'author via le setter approprié
      $author->setId($r->id);

      // ajout de l'author dans le tableau
      array_push($authors, $author);
      }
      return $authors;
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
