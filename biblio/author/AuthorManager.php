<?php

Class AuthorManager {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function save(Author $author) {
    $query = $this->db->prepare
     ('INSERT INTO author (firstname, lastname, birth_year,country)
     VALUES (:firstname, :lastname, :birth_year, :country)' // placeholders
      );

    $result = $query->execute(array(
      ':firstname'  => $author->getFirstname(),
      ':lastname'   => $author->getLastname(),
      ':birth_year' => $author->getBirthYear(),
      ':country'    => $author->getCountry(),
        ));

    return $result;
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
    $query = $this->prepare('DELETE FROM author WHERE id = :id');
    $result = $query->execute(array(':id'=> $id));
    return $result;

  }

  public function getById($id) {
    $query = $this->db->prepare('SELECT * FROM author WHERE id = :id');
    $query->execute(array(':id' => $id));
    $result = $query->fetch(PDO::FETCH_OBJ);

    // transformation  de l'objet PDO  result  en objet de type Author
    $author = new Author(
      $result->firstname,
      $result->lastname,
      $result->birth_year,
      $result->country
    );
    $author->setId($result->id);
    return $author;
  }

  public function getBooks($author_id) {
    // A faire
    // Renvoit un tableau d'objet book
  }
}

 ?>
