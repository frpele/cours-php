<?php
session_start();
var_dump($_SESSION);
 ?>


<h1>session 2</h1>
<h2>Bonjour <?= $_SESSION['username']?></h2>
