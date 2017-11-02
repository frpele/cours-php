<!-- <pre> -->

<!-- </pre> -->

<?php
if (isset($_GET['id_question'])) {
  $id_question = $_GET['id_question'];

  $query = $db->prepare(
    'SELECT title
    FROM question
    WHERE id= :id_question
     ');

  $query->execute(array(
    ':id_question' =>intval($id_question)
  ));
  $title = $query->fetch(PDO::FETCH_OBJ)->title;

  // récupération des réponses associées à la question traitée
  $query2=$db->prepare(
    'SELECT id, body,correct
    FROM answer
    WHERE id_question = :id_question
    ');

  $query2->execute(array(
    ':id_question' => $id_question
  ));

  $answers = $query2->fetchAll(PDO::FETCH_OBJ);
  // var_dump($answers);
}

if(isset($_POST['submit'])) {
  // formulaire d'ajout d'une réponse envoyé
  // var_dump($_POST);
  $correct=0;
  if(isset($_POST['correct'])) {
    $correct= 1;
  }

  // Enregistrment en DB
  $query = $db->prepare(
    'INSERT INTO answer (body, correct, id_question)
    VALUES (:body, :correct, :id_question)
    ');

  $result = $query->execute(array(
    ':body'        => $_POST['body'],
    ':correct'     => $correct,
    ':id_question' => intval($_POST['id_question'])
    ));

  ($result)
      ? header('location:?route=answer/manage&id_question='.$_POST['id_question'])
      : print('<p>L\'enregistrement de la réponse a échoué</p>')
      ;
}



?>

<h2>Question : <?= $title ?></h2>

<!-- <div class="container"> -->
  <div class="row">
    <div class="col-md-8">
      <?php if(sizeof($answers) ==0): ?>
        <div class="alert alert-warning">Aucune réponse enregistrée</div>

      <?php else: ?>
      <h3>Liste des réponses</h3>
      <table class="table table-bordered table-striped">
        <?php foreach($answers as $answer): ?>
          <tr>
            <td><?=$answer->body ?></td>
            <td>
              <?php
              echo ($answer->correct ==1) ? 'Bonne' : 'Mauvaise';
               ?>
               &nbsp;réponse
            </td>
            <td>
              <a
              class="btn btn-danger btn-xs"
              href="?route=answer/delete&id=<?=$answer->id ?>">Supprimer</a>
            </td>
          </tr>
        <?php endforeach ?>
      </table>
      <?php endif ?>
    </div>
    <div class="col-md-4">
      <h3>Ajouter une réponse</h3>
      <form class="" method="post" class="well">

        <div class="form-group">
          <label for="body">Texte</label><br>
          <textarea name="body" rows="4" cols="40" required></textarea>
        </div>

        <div class="form-group">
          <label for="correct">Bonne réponse</label><br>
          <input type="checkbox" name="correct">
        </div>

        <input type="hidden" name="id_question" value="<?= $id_question ?>">
        <input type="submit" name="submit" value="enregistrer" class="btn btn-primary">

      </form>
    </div>
  </div>

<!-- </div> -->
