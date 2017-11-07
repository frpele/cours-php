<?php
include('./categories.php');
$categories =getCategories($db);
include('./levels.php');
include('QCM.php'); // incluesion de la callse QCM

if (isset($_POST['submit'])) {
  $qcm = new QCM(
    $db,
    $_POST['category'],
    $_POST['level'],
    $_POST['nb_questions']
  );
  var_dump($qcm->generate());
}
 ?>


<h3>Génération d'un QCM</h3>

<form class="form-inline well" method="POST">
  <div class="form-group">
    <select class="" name="category">
      <option value="0">Choisir une catégorie</option>
      <?php foreach ($categories as $category): ?>
        <option value="<?= $category->id ?>"><?= $category->name ?></option>
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
