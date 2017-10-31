<?php
include('datasource.php');
include('header.php');
include('lib/functions.php');
$stagiaires = listeStagiaires();

?>
<h2>Contact</h2>




<div class="conteneur">
  <form  style="width:60%; float:left" action="form.php" method="post">
    <div class="form-group">
      <label for="">Objet</label><br>
      <input class="form-control" type="text" name="objet" value="">
    </div>

    <div class="message">
      <label for="">Message</label><br>
      <textarea class="form-control" name="message" rows="8" cols="100"></textarea>
    </div>

    <input id ="bouton" type="submit" name="" value="Valider">

  </form>

  <?php include('sidebar.php');?>

</div>

<?php
include('footer.php');
?>
