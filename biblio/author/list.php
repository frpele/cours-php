<?php  ?>

<h2>Gérer les auteurs</h2>

<table class="table table-bordered table-striped">
  <tr>
    <th>ID</th>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Année de naissance</th>
    <th>Pays</th>
  </tr>
<?php $i=0; ?>
<?php foreach ($authors as $author): ?>

<tr>
  <td><?= ++$i ?></td>
  <td><?=$author->firstname ?></td>
  <td><?=$author->lastname ?></td>
  <td><?=$author->birth_year ?></td>
  <td><?=$author->country ?></td>
  <td>
    <a
    href="#"
    class="btn btn-primary btn-xs">Modifier</a>
    <a
    href="#"
    class="btn btn-danger btn-xs">Supprimer</a>

  </td>
</tr>

<?php endforeach ?>
