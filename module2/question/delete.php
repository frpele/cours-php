<?php
// suppression de la question dont l'Id est passée en paramètre d'URL
if (isset($_GET['id'])) {
$id = $_GET['id'];

$query =$db->prepare('DELETE FROM question WHERE id = :id');
$result = $query->execute(array(
  ':id' => intval($id)
));

  if ($result) {
    // suppression des réponses liées à la question
    // afin d'éviter des lignes orphelines dans la table answer
    $query2 = $db->prepare(
      'DELETE FROM answer WHERE id_question = :id_question');
    $result2 = $query2->execute(array(
      ':id_question' =>intval($id)
    ));
    // en cas de succès, redirection vers la liste de questions
    ($result2)
      ? header('location:?route=question/list')
      : print('La suppression des réponses a échoué');

  } else {
    echo '<p>La suppression de la question a échoué</p>';
  }
}

?>
