<?php
class Ennemi extends Character
{
    private $wickedness;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->selectEnnemis();
    }
    private function selectEnnemis(){
        $ennemis = array(
            'Gurthang'  => array(
                'caste' => 'Bourreau',
                'wickedness' => 90,
                'life' => 15,
                'surname' => 'Fer de la mort',
                'knowledge' => 'Nombres',
            ),
            'Dagnir'  => array(
                'caste' => 'Lycanthrope',
                'wickedness' => 100,
                'life' => 14,
                'surname' => 'Tourmenteur',
                'knowledge' => 'Cartographie',
            ),
            'Aranruth' => array(
                'caste' => 'Sorcier',
                'wickedness' => 140,
                'life' => 10,
                'surname' => 'Colère du roi',
                'knowledge' => 'Sciences',
            ),
        );
        $name = $this->getName();
        foreach ($ennemis[$name] as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName() :string
    {
        return $this->name;
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