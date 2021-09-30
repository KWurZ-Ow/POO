<?php
class Ennemie extends Character
{
    private $wickedness;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->selectEnnemies();
    }

    private function selectEnnemies(){
        $ennemies = array(
            'Feanturi'  => array(
                'caste' => 'Elfe noire',
                'wickedness' => 120,
                'life' => 12,
                'surname' => 'Maîtresse des esprits',
                'knowledge' => 'Lettres',
            ),
            'Tinuviel'  => array(
                'caste' => 'Enchanteuse',
                'wickedness' => 130,
                'life' => 10,
                'surname' => 'Fille du crépuscule',
                'knowledge' => 'Arts',
            ),
            'Firiel' => array(
                'caste' => 'Empoisonneuse',
                'wickedness' => 110,
                'life' => 13,
                'surname' => 'Femme mortelle',
                'knowledge' => 'Diplomatie',
            ),
        );
        $name = $this->getName();
        foreach ($ennemies[$name] as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

     /**
     * Get the wickedness and the health pools of the character
     * @return string
     */ 
    public function displayCharacterStats()
    {
        return 'Il a une méchanceté de <b>' . $this->getWickedness() . '</b> et <b>' . $this->getLife() . '</b> points de vie.';
    }
    
    /**
     * Get the value of wickedness
     */ 
    public function getWickedness()
    {
        return $this->wickedness;
    }

    /**
     * Set the value of wickedness
     *
     * @return  self
     */ 
    public function setWickedness($wickedness)
    {
        $this->wickedness = $wickedness;

        return $this;
    }
}