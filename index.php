<style>
    *{
        background-color: #202020;
        color: lime;
    }
</style>
<?php
require_once('src/Seigneur.php');
require_once('src/Dame.php');
require_once('src/Ennemi.php');

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
$gorthol = new Seigneur("Gorthol");
echo '<pre>'; print_r($gorthol); echo '</pre>';
$elendur = new Seigneur("Elendur");
echo '<pre>'; print_r($elendur); echo '</pre>';
$anfauglith = new Seigneur("Anfauglith");
echo '<pre>'; print_r($anfauglith); echo '</pre>';
$maeglin = new Dame("Maeglin");
echo '<pre>'; print_r($maeglin); echo '</pre>';