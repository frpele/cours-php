<?php

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'root' && $password == 'paris') {
    $_SESSION['admin'] = $username;
    header('location:?route=question/list');
  } else {
    echo '<p class="alert alert-danger">L\'identification a échoué</p>';
  }

}
 ?>

 <h3>Log in</h3>

 <form method="POST">
   <div class="form-group">
     <input type="text" placeholder="Nom d'utilisateur" name="username" required>
   </div>
   <div class="form-group">
     <input type="password" placeholder="mot de passe" name="password" required>
   </div>
   <input type="submit" name="submit" value="Connexion" class="btn btn-primary">

 </form>
