<?php
class Seigneur extends Character
{
    private $intelligence;
    private $seigneurs = array(
        'Celeborn' => array(
            'caste' => 'Archer',
            'intelligence' => 100,
            'life' => 14,
            'surname' => "Arbre d'argent",
            'knowledge' => 'Nombres',
        ),
        'Calimehtar' => array(
            'caste' => 'Guerrier',
            'intelligence' => 90,
            'life' => 15,
            'surname' => "Guerrier de lumière",
            'knowledge' => 'Cartographie',
        ),
        'Gorthol' => array(
            'caste' => 'Chevalier',
            'intelligence' => 110,
            'life' => 13,
            'surname' => "Haume de terreur",
            'knowledge' => 'Diplomatie',
        ),
        'Elendur' => array(
            'caste' => 'Elfe',
            'intelligence' => 120,
            'life' => 12,
            'surname' => "Serviteur des étoiles",
            'knowledge' => 'Arts',
        ),
        'Anfauglith' => array(
            'caste' => 'Magicien',
            'intelligence' => 130,
            'life' => 11,
            'surname' => "Poussière d'agonie",
            'knowledge' => 'Sciences',
        ),
        'Turambar' => array(
            'caste' => 'Erudit',
            'intelligence' => 140,
            'life' => 10,
            'surname' => "Maître du destin",
            'knowledge' => 'Lettres',
        )
    );

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->selectSeigneur();
    }

    private function selectSeigneur(){
        $name = $this->getName();
        foreach ($this->seigneurs[$name] as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of intelligence
     */ 
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set the value of intelligence
     *
     * @return  self
     */ 
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }
}