<?php

function listeStagiaires() {

  $stagiaires = array(
    array(
      'id' => 1,
      'nom' => 'abecassis',
      'prenom'=> 'stéphane',
      'password'=> '123',
      'totem'=> 'hippo.jpg',
      'note' => [8,12,1]),

    array(
      'id' => 2,
      'nom' => 'chauvet',
      'prenom'=> 'stevens',
      'password'=> '123',
      'totem'=> 'leopard.png',
      'note' => array(4,20,10)),

    array(
      'id' => 3,
      'nom' => 'grivel',
      'prenom'=> 'sébastien',
      'password'=> '123',
      'totem'=> 'loup.jpeg',
      'note' => [8,12,1]),

      array(
        'id' => 4,
        'nom' => 'leponge',
        'prenom'=> 'bob',
        'password'=> '123',
        'totem'=> 'loup.jpeg',
        'note' => [8,12,1]),

      array(
        'id' => 5,
        'nom' => 'laflamme',
        'prenom'=> 'aurélie',
        'password'=> '123',
        'totem'=> 'loup.jpeg',
        'note' => [8,12,10]),

      array(
        'id' => 6,
        'nom' => 'dupontel',
        'prenom'=> 'albert',
        'password'=> '123',
        'totem'=> 'loup.jpeg',
        'note' => [8,12,14]),

      array(
        'id' => 7,
        'nom' => 'begood',
        'prenom'=> 'johnny',
        'password'=> '123',
        'totem'=> 'loup.jpeg',
        'note' => [17,16,19]),

      array(
        'id' => 8,
        'nom' => 'tysoni',
        'prenom'=> 'mika',
        'password'=> '123',
        'totem'=> 'loup.jpeg',
        'note' => [8,4,1]),

      array(
        'id' => 9,
        'nom' => 'bigfat',
        'prenom'=> 'ariane',
        'password'=> '123',
        'totem'=> 'loup.jpeg',
        'note' => [8,12,17]),

      array(
        'id' => 10,
        'nom' => 'lionne',
        'prenom'=> 'celine',
        'password'=> '123',
        'totem'=> 'loup.jpeg',
        'note' => [11,15,13]),
  );

  return $stagiaires;
}

function stagiaireParId($id) {
  // @IN integer
  // @OUT array()  || NULL
  $stagiaire = NULL;
  foreach (listeStagiaires() as $s) {
    if ($s['id'] == $id) {
      $stagiaire = $s;
      break; // sortie de boucle
    }
  }
  return $stagiaire;
}

 ?>
