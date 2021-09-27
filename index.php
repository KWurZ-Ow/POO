<style>
    *{
        background-color: rgb(32, 32, 32);
        color: lime;
        animation: rainbow 3s infinite;
    }
    *::selection{
        background-color: lime;
        color: rgb(32, 32, 32);
    }

    @keyframes rainbow {
            0% {color: red;}
            25% {color: yellow;}
            50% {color: cyan;}
            75% {color: purple;}
            100% {color: red;}
        }
</style>
<?php
require_once('src/Autoloader.php');
Autoloader::register();

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