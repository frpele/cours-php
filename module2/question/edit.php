
<?php
include('categories.php');// accès la variable categories

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
           <?php if($question->category == $category): ?>
             <option selected><?= $category ?></option>
          <?php else: ?>
             <option ><?= $category ?></option>
         <?php endif ?>

         <?php endforeach ?>
       </select>
   </div>

   <div class="form-group">
       <select class="" name="level">
         <option value="0">Choisir un niveau de difficulté</option>
         <option value="1">Facile</option>
         <option value="2">Moyen</option>
         <option value="3">Difficile</option>
       </select>
   </div>

   <input type="submit" name="submit" value="Modifier" class="btn btn-primary">

 </form>
