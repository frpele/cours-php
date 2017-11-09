<?php
include('./categories.php');
$categories =getCategories($db);
include('./levels.php');
include('QCM.php'); // inclusion de la classe QCM

if (isset($_POST['submit'])) {
  $qcm = new QCM(
    $db,
    $_POST['category'],
    $_POST['level'],
    $_POST['nb_questions']
  );
  $questions = $qcm->generate(); // retourne un tableau d'objets Question

  // echo'<pre>';
  // print_r($questions);
  // echo'</pre>';

}

if (isset($_POST['validate'])) {
// var_dump($_POST
// On reconstitue l'objet QCM perdu en raison de la nouvelle requete http
$qcm = new QCM(
  $db,
  $_POST['category'],
  $_POST['level'],
  $_POST['nb_questions']
);

  $questions = $qcm->generate(); // génération du formaulaire
  $results = $qcm->processChoices($_POST); // traitement des choix client
  echo'<p>Vous avez obtenu '. $results. ' bonne(s) réponse(s)</p>';

}
 ?>

<h3>Génération d'un QCM</h3>
<form class="form-inline well" method="POST">
  <div class="form-group">
    <select class="" name="category">
      <option value="0">Choisir une catégorie</option>
      <?php foreach ($categories as $category): ?>
        <option value="<?= $category->id ?>"><?= ucfirst($category->name) ?></option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <select class="" name="level">
      <option value="0">Choisir un niveau de difficulté</option>
      <?php foreach ($levels as $key => $level): ?>
        <option value="<?= $key ?>"><?= $level ?></option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <label for="">Nombre max de questions</label>
    <input type="number" name="nb_questions" value="">
  </div>

  <input type="submit" name="submit" value="Générer" class="btn btn-primary">

</form>

<div>

<?php
if (isset($qcm) && $questions == false) {
  echo '<div class="alert alert-warning">';
  echo 'Aucune question ne correspond aux critères de recherche';
  echo'</div>';
}
?>

<?php if (isset($_POST['submit']) && $questions != false): ?>

  <form method="POST">
  <?php foreach ($questions as $question): ?>
    <div>
      <h4><?= $question->getTitle() ?></h4>
    <?php foreach($question->getAnswers() as $answer): ?>
      <div>
        <input
        value="<?= $answer->getId() ?>"
        name="<?= $question->getId() ?>[]"
        type="checkbox">
        <?= $answer->getBody() ?>
      </div>
    <?php endforeach  ?>
    </div>
  <?php endforeach  ?>
  <input type="hidden" name="category" value="<?=$qcm->getCategory()?>">
  <input type="hidden" name="level" value="<?=$qcm->getLevel()?>">
  <input type="hidden" name="nb_questions" value="<?=$qcm->getNbQuestions()?>">
  <input type="submit" name="validate" value="Valider" class="btn btn-primary">
  </form>
<?php endif ?>

</div>
