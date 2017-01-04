<?php
class Vehicules {
  public $longueur;
  public $largeur;
  public $hauteur;
  public $masse;
  public $energie;
  public $puissance;
  public $vitesseInstantanee;
  public $chargeUtile;
  public $nombrePassager;
  public $consomationMoyenne;

  public function __construct($masse, $longueur, $largeur, $hauteur) {
    $this -> masse = $masse;
    $this -> longueur = $longueur;
    $this -> largeur = $largeur;
    $this -> hauteur = $hauteur;
  }

  public function deplacer($origine, $destination, $charge = 0) {

  }

  public function accelerer($vitesseInitiale, $vitesseFinale, $temps) {

  }

  public function consommer() {

  }

  public function informerTrajet($timeDepart, $time) {

  }

  public function calculerEnergieCinetique() {
    return 0.5 * $this -> masse * ($this -> vitesseInstantanee)**2;
  }
}

class Voiture extends Vehicules
{
  public $couleur;
  public $marque;
  public $model;

  public function afficherEC() {
    $energie = parent::calculerEnergieCinetique();
    echo "Votre énergie est de $energie Joules";
  }
}

$voiture1 = new Voiture(1200, 3, 2, 1.8);
$voiture1 -> vitesseInstantanee = 35;
echo $voiture1 -> afficherEC();

class Moto extends Vehicules
{
  public $couleur;
  public $marque;
  public $model;
  public $roues;
  public $cylindre;
  public $type;

}
?>
