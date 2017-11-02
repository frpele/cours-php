<?php

// 1 préparation de la requête
$query =$db->prepare('SELECT * FROM question ORDER BY id DESC');

// 2 Exectuyion
$query->execute();

//3 Récupération des données (fetch)
$questions = $query-> fetchAll(PDO::FETCH_OBJ);


// var_dump($questions);

 ?>

<h2>Liste des questions</h2>
<table class="table table-bordered table-striped">
  <tr>
    <th>Intitulé</th>
    <th>Catégorie</th>
    <th>Niveau</th>
    <th>Actions</th>
  </tr>

<?php foreach ($questions as $question): ?>

<tr>
  <td><?=$question->title ?></td>
  <td><?=$question->category ?></td>
  <td><?=$question->level ?></td>
  <td>

    <a
    href="?route=answer/manage&id_question=<?= $question->id ?>"
    class="btn btn-success btn-xs">Gérer les réponses</a>
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
