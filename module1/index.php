<?php
include('lib/functions.php');
include('datasource.php');

$stagiaires = listeStagiaires();

?>

<?php include ('header.php') ?>
  <h2>Liste des stagiaires</h2>
  <div class="conteneur">
    <table>
      <tr>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Totem</th>
              <th>Dernière note</th>
              <th>Moyenne</th>
      </tr>
      <?php
      foreach($stagiaires as $s) {
        $moyenne = moyenne($s['note'], 2);

          echo '<tr>
          <td>' . majusculeInitiale($s['prenom']) . '</td>
          <td><a href="stagiaire_details.php?id='.$s['id'].'">' . majusculeInitiale($s['nom']) . '</a></td>
          <td><img src="' . ASSETS_PATH . 'img/' . $s['totem'] . '"></td>
          <td>' . derniereNote($s['note']) . '</td>';

          if ($moyenne <10) {
          echo   '<td class = "'. ERROR_CLASS.'">' . $moyenne . '</td>';
        } else {
          echo   '<td>' . $moyenne . '</td>';
        }
          echo '</tr>';
      }
       ?>
    </table>

    <?php include('sidebar.php');?>

</div>


<?php include('footer.php'); ?>
