<?php

include('levels.php'); // accès à la variable $levels

// fonction retournant le nbre de réponses associées à une question
function getNbAnswers($db, $id_question) {
  // On fournit DB en entrée de la fonction afin qu'elle puisse
  // se servir de cet objet permettant les opérations en bdd
  $query = $db->prepare(
    'SELECT COUNT(*) FROM answer WHERE id_question = :id_question');
  $query->execute(array(
    ':id_question' =>$id_question
  ));
  $num = $query->fetch(PDO::FETCH_NUM);
  // fetch envoie un tableau d'un seul élément (indice 0)
  return $num[0];
}

// 1 préparation de la requête
$query =$db->prepare('SELECT * FROM question ORDER BY id DESC');

// 2 Execution
$query->execute();

//3 Récupération des données (fetch)
$questions = $query-> fetchAll(PDO::FETCH_OBJ);


// var_dump($questions);

 ?>

<h2>Liste des questions</h2>
<table class="table table-bordered table-striped">
  <tr>
    <th>ID</th>
    <th>Intitulé</th>
    <th>Catégorie</th>
    <th>Niveau</th>
    <th>Actions</th>
  </tr>
<?php $i=0; ?>
<?php foreach ($questions as $question): ?>

<tr>
  <td><?= ++$i ?></td>
  <td><?=$question->title ?></td>
  <td><?=$question->category ?></td>
  <?php foreach ($levels as $key => $level): ?>
   <?php if($question->level == $key): ?>
  <td><?= $level ?></td>
  <?php endif ?>
  <?php endforeach; ?>
  <td>

    <a
    href="?route=answer/manage&id_question=<?= $question->id ?>"
    class="btn btn-success btn-xs">
    <?= getNbAnswers($db,$question->id )?> réponse(s)</a>
    <a
    href="?route=question/edit&id=<?= $question->id ?>"
    class="btn btn-primary btn-xs">Modifier</a>
    <a
    href="?route=question/delete&id=<?= $question->id ?>"
    class="btn btn-danger btn-xs">Supprimer</a>

  </td>
</tr>

<?php endforeach ?>

</table>
