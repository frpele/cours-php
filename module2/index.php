<?php
session_start(); // ouverture /accès session

include('routes.php');
$db = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8','root', 'caze6294');


if (isset($_GET['route'])) {
  $route = $_GET['route'];
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Module 2</h1>
        <nav>
          <ul class="nav nav-tabs">

            <?php if(isset($_SESSION['admin'])): ?>
            <li><a href="?route=question/list">Liste des questions</a></li>
            <li><a href="?route=question/add">Ajouter une question</a></li>
            <li><a href="?route=category/list">Gérer les catégories</a></li>
            <li><a href="?route=qcm">QCM</a></li>
            <?php endif ?>

            <?php if(isset($_SESSION['admin'])): ?>
                <li>
                  <a href="?route=logout">
                    <span>Bienvenue à <strong> <?= $_SESSION['admin'] ?></strong></span>
                    Deconnexion
                  </a>
                </li>

            <?php else: ?>
                <li><a href="?route=login">Connexion</a></li>
            <?php endif ?>
          </ul>
        </nav>
      </header>

    <!-- Création d'une application quizz -->
      <?php
      if (isset($route)) {
        include($routes[$route]);
      }
       ?>

     </div>
  </body>
</html>
