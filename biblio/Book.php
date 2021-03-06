<?php
class Book {
  private $db = NULL;
  private $id = NULL;
  private $title = NULL;
  private $isbn = NULL;
  private $pages = NULL;
  private $id_author = NULL;

  public function __construct($db, $id, $title, $isbn,$pages, $id_author) {
    // assignation directe ans setters
    $this->setDb($db);
    $this->id = $id;
    $this->title = $title;
    $this->isbn = $isbn;
    $this->pages = $pages;
    $this->id_author = $id_author;
  }

  public function getId() { return $this->id;}
  public function getTitle() { return $this->title;}
  public function getIsbn() { return $this->isbn;}
  public function getPages() { return $this->pages;}
  public function getIdAuthor() { return $this->id_author;}

  private function setDb(PDO $db) {
    // on indique de quel type sera l'argument
    // ce renseignement, qu'on utilise uniquement dans le cas
    // de types complexes (array, object), est facultatif
    $this->db = $db;
    return $this->db;
  }

  public function getBooks() {

    $query = $this->db->prepare
    ('SELECT book.title, book.id,
      book.id_author, author.lastname as author
      FROM author
      JOIN book ON author.id = book.id_author
      ORDER BY book.title ASC
    ');

    // 2 Execution
    $query->execute();
    //3 Récupération des données (fetch)
    $books = $query-> fetchAll(PDO::FETCH_OBJ);

    return $books;
  }

  public function addBook() {

    $query = $this->db->prepare
     ('INSERT INTO book (title, isbn, pages, id_author) VALUES (:title, :isbn, :pages, :id_author)'
        );

    $result = $query->execute(array(
      ':title'     => $_POST['title'],
      ':isbn'      => intval($_POST['isbn']),
      ':pages'     => intval($_POST['pages']),
      ':id_author' => intval($_POST['id_author'])
        ));

    return $result;

    }

    public function deleteBook($id_book) {

      $query=$this->db->prepare(
        'DELETE FROM book WHERE id = :id_book');

      $result = $query->execute(array(
        ':id_book' =>$id_book
      ));

    return $result;
    }

  }




?>
