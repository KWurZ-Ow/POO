<?php
require_once('src/Seigneur.php');
$seigneur = new Seigneur(1, "Celeborn", "Arbre d'argent", "Archer", "Nombres", 100, 14);
echo '<pre>'; print_r($seigneur); echo '</pre>';
// $seigneur->setId(1)
// ->setName('Celeborn')
// ->setSurname("Arbre d'argent")
// ->setCaste("Archer")
// ->setKnowledge("Nombres")
// ->setIntelligence(100)
// ->setLife(14)
// ->setImage('/images/celeborn.jpg')
// ;
// echo $seigneur->getName();

// echo '<pre>'; print_r($seigneur); echo '</pre>';