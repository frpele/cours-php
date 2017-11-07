<?php

class Color {

  const DEFAULT_COLOR = 'black';
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

    array(
      'human'=>'black',
      'hexa'=>'000000',
      'rgb' =>'0,0,0'
    ),
  );

  // Constructeur : foncion déclenché automatiquement
  // lors de l'instanciation (new) d'un oci_fetch_object
  // permet de fournir ) l'objet des données dès l'instanciation
  public function __construct($colorHuman) {
  // Hydratation : "alimente" les propriétés en données
  // au constructeur au moment de l'instanciation
    if ($this->checkColor($colorHuman)) {
      // couleur donnée à l'instanciation trouvée par la méthode privée
      //checkColor -> hydratation
      $this->colorHuman = $colorHuman;
    } else {
      $this->colorHuman = self::DEFAULT_COLOR;
    }
  }

  private function checkColor($colorStr) {
    $colorHumanFound = false;
    foreach ($this->colors as $color) {
      if ($color['human'] == $colorStr) {
        $colorHumanFound = true;
        break;
      }
    }
    return $colorHumanFound;
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
