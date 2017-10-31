<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH .'css/styles.css' ?>">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
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
        </div>
          <div class="col-md-3">
              <?php include('sidebar.php');?>
          </div>
        </div>
    </div>
  </body>
</html>
