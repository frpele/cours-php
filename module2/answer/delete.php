<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];

$query=$d->prepare(
  'DELETE FROM answer
  WHERE $id= :id
  ');
$result = $query->execute(array(
  ':id' =>$id
));

// ($result)
// ? header('location:')
// :

}


?>
