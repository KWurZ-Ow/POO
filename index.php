<?php
require_once('src/Seigneur.php');
$seigneur = new Seigneur();
echo '<pre>'; print_r($seigneur); echo '</pre>';
$seigneur->setName('Celeborn');
echo $seigneur->getName();