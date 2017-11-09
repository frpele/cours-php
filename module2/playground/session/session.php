
<?php
session_start();

$_SESSION['username'] = 'Abdel';
$_SESSION['password'] = 123;
var_dump($_SESSION);

 ?>

<h1>session</h1>
<h2>Bonjour <?= $_SESSION['username']?></h2>
<ul>
  <li><a href="session2.php">Page session 2</a></li>
  <li><a href="deconnexion.php">Deconnexion</a></li>
</ul>
