<?php
class Routeur{
    private $seigneursNames = array('Celeborn', 'Calimehtar', 'Gorthol', 'Elendur', 'Anfauglith', 'Turambar');
    private $damesNames = array('Maeglin', 'Athelleen', 'Nolofinwe', 'Eldalote', 'Anardil', 'Rumil');
    private $ennemisNames = array('Gurthang', 'Dagnir', 'Aranruth');
    private $ennemiesNames = array('Feanturi', 'Tinuviel', 'Firiel');
    
    public function existSeigneur($query){
        return in_array($query, $this->seigneursNames);
    }
    
    public function existDame($query){
        return in_array($query, $this->damesNames);
    }
    
    public function existEnnemi($query){
        return in_array($query, $this->ennemisNames);
    }
    
    public function existEnnemie($query){
        return in_array($query, $this->ennemiesNames);
    }

    public function route(){
        require_once('src/Autoloader.php');
        Autoloader::register();
        $url = $_GET['display'];
        require("templates/navbar.php");
        switch ($url) {
            case 'all':
                echo '<div id="📦">';

                foreach ($this->seigneursNames as $seigneurs){
                    $$seigneurs = new Seigneur($seigneurs);
                    $object = $$seigneurs;
                    require("templates/quickPresentation.php");
                }

                foreach ($this->damesNames as $dames){
                    $$dames = new Dame($dames);
                    $object = $$dames;
                    require("templates/quickPresentation.php");
                }

                foreach ($this->ennemisNames as $ennemis){
                    $$ennemis = new Ennemi($ennemis);
                    $object = $$ennemis;
                    require("templates/quickPresentation.php");
                }

                foreach ($this->ennemiesNames as $ennemies){
                    $$ennemies = new Ennemie($ennemies);
                    $object = $$ennemies;
                    require("templates/quickPresentation.php");
                }
                break;
            case 'dames':
                echo '<div id="📦">';

                foreach ($this->damesNames as $dames){
                    $$dames = new Dame($dames);
                    $object = $$dames;
                    require("templates/quickPresentation.php");
                }
                break;
            case 'seigneurs':
                echo '<div id="📦">';

                foreach ($this->seigneursNames as $seigneur){
                    $$seigneur = new Seigneur($seigneur);
                    $object = $$seigneur;
                    require("templates/quickPresentation.php");
                }
                break;
            case 'ennemis':
                echo '<div id="📦">';

                foreach ($this->ennemisNames as $ennemis){
                    $$ennemis = new Ennemi($ennemis);
                    $object = $$ennemis;
                    require("templates/quickPresentation.php");
                }
                break;
            case 'ennemies':
                echo '<div id="📦">';

                foreach ($this->ennemiesNames as $ennemies){
                    $$ennemies = new Ennemie($ennemies);
                    $object = $$ennemies;
                    require("templates/quickPresentation.php");
                }
                break;
            default:
                if ($this->existSeigneur(ucwords($url))){
                    echo '<div id="🧰">';
                    $object = new Seigneur(ucwords($url));
                    require("templates/presentation.php");
                    echo '</div>';
                }else if ($this->existDame(ucwords($url))){
                    echo '<div id="🧰">';
                    $object = new Dame(ucwords($url));
                    require("templates/presentation.php");
                    echo '</div>';
                }else if ($this->existEnnemi(ucwords($url))){
                    echo '<div id="🧰">';
                    $object = new Ennemi(ucwords($url));
                    require("templates/presentation.php");
                    echo '</div>';
                }else if ($this->existEnnemie(ucwords($url))){
                    echo '<div id="🧰">';
                    $object = new Ennemie(ucwords($url));
                    require("templates/presentation.php");
                    echo '</div>';
                }
                else{
                    echo '<div id="❌">';
                    echo '<h1 style="color: red;">Erreur 404</h1>';
                    echo '<p>La page '.ucwords($url).' n\'existe pas...';
                    echo '</div>';
                }
                break;
        }
        echo '</div>';
    }
}