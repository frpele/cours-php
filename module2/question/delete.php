<?php
// suppression de la question dont l'Id est passée en paramètre d'URL
if (isset($_GET['id'])) {
$id = $_GET['id'];

$query =$db->prepare('DELETE FROM question WHERE id = :id');
$result = $query->execute(array(
  ':id' => intval($id)
));

if ($result) {
  // en cas de succès, redirection vers la liste de questions
header('location:?route=question/list');
} else {
  echo '<p>suppresion impossible</p>';
}

}

 ?>
