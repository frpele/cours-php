<!-- <pre>
//?php print_r($_GET); ?>
</pre> -->
<?php
include('./categories.php');// accès la variable $categories
include('levels.php'); // accès à la variable $levels
$categories = getCategories($db);

// var_dump($categories);

// suppression de la question dont l'Id est passée en paramètre d'URL
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query =$db->prepare('SELECT * FROM question WHERE id = :id');
$result = $query->execute(array(
  ':id' => intval($id)
));
$question = $query-> fetch(PDO::FETCH_OBJ);// renvoie un objet
}

// cas où le formulaire de mise à jour est envoyé
if (isset($_POST['submit'])) {
  // 1/ validation des données
  $cond1 = $_POST['title']    != "";
  $cond2 = intval($_POST['category']) != "0";
  $cond3 = $_POST['level']    != "0";

  if ($cond1 && $cond2 && $cond3) {

    // 2 Enregistrement des nouvelles données
    // prepare
    $query=$db->prepare(
      'UPDATE question
      SET title =:title, category=:category, level=:level
      WHERE id = :id
    ');

    // execute
    $result=$query->execute(array(
      ':title'    => $_POST['title'],
      ':category' => $_POST['category'],
      ':level'    => intval($_POST['level']),
      ':id'       => intval($_POST['id'])
    ));

    if ($result) {
      // echo'<p>Enregistrement réussi</p>';
      //redirection vers la liste des questions
      header(('location:?route=question/list'));
    } else  {
      echo'<p>La mise à jour a échoué</p>';
    }

  } else  {
      echo 'Une des conditions de validation n\'est pas remplie';
  }
}

 ?>
<h2>Modifier une question</h2>
 <form class="" method="post" style="width:30%">
   <div class="form-group">
       <label for="">Intitulé de la question</label>
       <input type="text" name="title" value="<?= $question->title ?>" class="form-control" required>
   </div>

   <div class="form-group">
       <select class="" name="category">
         <option>Choisir une catégorie</option>
         <?php foreach($categories as $category):?>
           <?php if($question->category == $category->id): ?>
             <option selected value="<?= $category->id ?>"><?= ucfirst($category->name) ?></option>
          <?php else: ?>
             <option value="<?= $category->id ?>" ><?= ucfirst($category->name) ?></option>
         <?php endif ?>
         <?php endforeach ?>
       </select>
   </div>

   <div class="form-group">
       <select class="" name="level">
         <option value="0">Choisir un niveau de difficulté</option>
         <?php foreach ($levels as $key => $level): ?>
          <?php if($question->level == $key): ?>
            <option value="<?= $key ?>" selected><?= $level ?></option>
          <?php else: ?>
          <option value="<?= $key ?>"><?= $level ?></option>
          <?php endif ?>
          <?php endforeach; ?>
       </select>
   </div>

   <!-- Le champ hidden permet d'ajouter dans la superglobale post des infos
   que l'on souhaite conserver (l'id de la question ici)  -->
   <input type="hidden" name="id" value="<?=$id ?>">
   <input type="submit" name="submit" value="Modifier" class="btn btn-primary">

 </form>
