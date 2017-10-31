<?php

function majusculeInitiale($str) {
  // dans la version actuelle les caractères accentués
  // ne sont pas convertis en majuscule

  $initiale = $str[0]; // equivalent à ($str, 0, 1) 0 départ et 1 longueur
  $reste = substr ($str, 1);
  $initialeMajus = strtoupper($initiale);
  $resteMinus = strtolower($reste);

  return $initialeMajus . $resteMinus;

}

function derniereNote($note) {
  /* renvoie la dernière note si le tableau note n'est pas vide
  et renvoie aucune note si le tableau note est vide*/
 $nbrNotes = sizeof($note);

 if ($nbrNotes == 0) {
  return AUCUNE_NOTE_MSG;
  } else {
    $derniereNote = $note[$nbrNotes-1];
    return $derniereNote;
  }
}

function moyenne($notes, $precision) {
  $nbrNotes = sizeof($notes);
  $somme = 0;

  if ($nbrNotes == 0) return AUCUNE_NOTE_MSG;
  if ($nbrNotes == 1) return $notes[0];

  for($i=0; $i<$nbrNotes; $i++) {
      $somme += $notes[$i];
      }
      /* foreach($notes as $note) {
      $somme +=$note;
      */
  $moyenne = $somme / $nbrNotes;

  // if ($moyenne<10)  {
  // $resultat =  '<span style="color:'. ALERTE .'">' . $moyenne . '</span>' ;
  // return $resultat;
  // }

  return round($moyenne,$precision);
}

function afficheStagiaireDetails($stagiaire) {
  $output = '';
  $output .= '<div>';
  $output .= '<h3>Nom du stagiaire: <span class ="stagiaire"> '. majusculeInitiale($stagiaire['nom']) .'</span></h3>';
  $output .= '<img src="' . ASSETS_PATH . 'img/' . $stagiaire['totem'] . '">';
  $output .= '</div>';

  return $output;
}

function meilleurStagiaire($stagiaires) {
  // @in : tableau des stagiaires
  // @out : stagiare ayant la meilleure moyenne
  $meilleurMoyenne = moyenne($stagiaires[0]['note'],2);
  $meilleurStagiaire = NULL;
  $indice = NULL;

  $i =0;

  foreach ($stagiaires as $s) {
      if(moyenne($s['note'],2) > $meilleurMoyenne) {
        $meilleurMoyenne = moyenne($s['note'],2);
        $meilleurStagiaire = $s;
        $indice = $i;
      }
      $i++;
    }
  return array(
    'stagiaire' => $meilleurStagiaire,
    'moyenne' => $meilleurMoyenne,
    'indice' => $indice,

  );
}

function meilleursStagiaires($stagiaires, $limit) {
  // @in : stagiaires : sources de données
  // @in : limit : nbre de stagiaires à renvoyer
  // @out : tableau de stagiaires + moyennes
  $i = 0;
  $meilleursStagiaires  = array();

  while ($i < $limit) {
    $meilleur = meilleurStagiaire($stagiaires);
    array_push($meilleursStagiaires, $meilleur);
    array_splice($stagiaires, $meilleur['indice'],1);

    $i++;
  }
 return $meilleursStagiaires;
}

function verifieIdentite($info, $stagiaires){
  // @in info: superglobale $_POST
  // @in stagiaires : source de données dans laquelle on recherche
  // @out bool (true or false)

  $found = false;
  foreach ($stagiaires as $s) {
    if  (($s['nom'] == $info['nom']) && ($s['password'] == $info['password'])) {
      $found = true;
      break;
    }
  }
  return $found;
}


function demo() {
  $tab = ['Chris','Test', 'Gab'];
  array_splice($tab,1,1);
  return $tab; // résultat attendu :  Chris, Gab
}
?>
