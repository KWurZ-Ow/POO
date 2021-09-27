<style>
    *{
        background-color: #202020;
        color: lime;
    }
    *::selection{
        background-color: lime;
        color: #202020;
    }
</style>
<?php
require_once('src/Character.php');
require_once('src/Seigneur.php');
require_once('src/Dame.php');
require_once('src/Ennemi.php');
require_once('src/Ennemie.php');

$celeborn = new Seigneur("Celeborn");
echo '<pre>'; print_r($celeborn); echo '</pre>';
$celeborn
->setIntelligence(150)
->setLife(20)
;
echo '<pre>'; print_r($celeborn); echo '</pre>';

// echo '<img src="'.$seigneur->getImage().'"/>';

$calimethar = new Seigneur("Calimethar");
echo '<pre>'; print_r($calimethar); echo '</pre>';
$maeglin = new Dame("Maeglin");
echo '<pre>'; print_r($maeglin); echo '</pre>';
$gurthang = new Ennemi("Gurthang");
echo '<pre>'; print_r($gurthang); echo '</pre>';
$feanturi = new Ennemie("Feanturi");
echo '<pre>'; print_r($feanturi); echo '</pre>';