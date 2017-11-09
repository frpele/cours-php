<?php
session_start(); // il faut d'abord accéder à la ssion pour la détruire
session_destroy();

header('location:session2.php'); //redirection
 ?>
