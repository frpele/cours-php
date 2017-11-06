<?php

class Color {
  public $colorHuman = NULL;

  private $colors =array(
    array(
      'human'=>'red',
      'hexa'=>'FF0000',
      'rgb' =>'255,0,0'
    ),

    array(
      'human'=>'green',
      'hexa'=>'00FF00',
      'rgb' =>'0,255,0'
    ),
  );

  // Constructeur : foncion déclenché automatiquement
  // lors de l'instanciation (new) d'un oci_fetch_object
  // permet de fournir ) l'objet des données dès l'instanciation
  public function __construct($colorHuman) {
  // Hydratation : "alimente" les propriétés en données
  // au constructeur au moment de l'instanciation
  $this->colorHuman = $colorHuman;
  }

  public function convertToHexa() {
    $colorHexa = NULL;

    foreach ($this->colors as $color) {
      if ($color['human'] == $this->colorHuman) {
        $colorHexa = $color['hexa'];
        break;
      }
    }
    return $colorHexa;
  }

  public function convertToRgb() {
    $colorRgb = NULL;

    foreach ($this->colors as $color) {
      if ($color['human'] == $this->colorHuman) {
        $colorRgb = $color['rgb'];
        break;
      }
    }
    return $colorRgb;
  }



}


 ?>
