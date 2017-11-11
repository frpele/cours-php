<?php
// session_start(); // ouverture /accès session

include('routes.php');
$db = new PDO('mysql:host=localhost;dbname=biblio;charset=utf8','root', 'caze6294');

if (isset($_GET['route'])) {
  $route = $_GET['route'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Biblio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <header>
        <h1>TP3 Biblio</h1>
        <nav>
          <ul class="nav nav-tabs">
            <li><a href="?route=book/list">Liste des livres</a></li>
            <li><a href="?route=book/add">Ajouter un livre</a></li>
            <li><a href="?route=author/list">Gérer les auteurs</a></li>
          </ul>
        </nav>
      </header>

    <!-- Création d'une application quizz -->
      <?php
      if (isset($route)) {
        include($routes[$route]);
      }
       ?>
  </body>
</html>
