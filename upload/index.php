<?php
var_dump($_POST);
var_dump($_FILES);

// $_FILES :  tableau de tableaux associatifs.
// Chaque tableau assciatif représente un fichier uploaded contenant les clés suivantes
// name, type, tmp_name, error, size





 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload</title>
  </head>
  <body>
    <form method="post" enctype="multipart/form-data">
      <input type="file" name="file" >
      <input type="submit" name="" value="Envoyer les données">
    </form>

  </body>
</html>
