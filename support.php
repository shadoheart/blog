<?php
class Voiture
{
  const  ROUES = 4;
  public $couleur = "Rouge";
  public $placeAssise = 5;
  public $porte = 5;
  public $carburant;
  public $vitesseMoyenne;

  public function __tostring() {
    return "vous éte dans la class voiture";
  }

  public function afficherRoues() {
    echo self::ROUES;
  }

  public function afficherCouleur ($couleur) {
    $couleurAffichee = $this -> couleur;
  }

  public function calculerDistance ($temps) {
    $distance = $temps* $this -> vitesseMoyenne.'km';
    $resultat = "Elle parcour en moyenne $distance pour une durée de $temps h.";
    return $resultat;
  }

  public function deboguer() {
    echo 'class : ', __CLASS__, ' - ', __METHOD__;
  }
}

$voiture1 = new voiture();
$voiture1 -> carburant = "Essence";
$voiture1 -> vitesseMoyenne = 90;
$voiture1_0 = $voiture1 -> calculerDistance(2);

$voiture2 = new voiture();
$voiture2 -> couleur = "Blanc";
$voiture2 -> porte = 3;
$voiture2 -> carburant = "Diesel";

echo 'Notre voiture familliale est : '
      .$voiture1 -> couleur
      .' '
      .$voiture1 -> porte
      .' Porte '
      .$voiture1 -> carburant
      .' '
      .$voiture1::ROUES
      .' Roues. '
      .$voiture1_0
      ."<br>";

echo "<br>"
      .'Notre voiture comerciale est : '
      .$voiture2 -> couleur
      .' '
      .$voiture2 -> porte
      .' Porte '
      .$voiture2 -> carburant;

      if ($voiture1 instanceof Voiture) {
        echo "oui";
      }
      else {
        echo "bah non!";
      }
?>
