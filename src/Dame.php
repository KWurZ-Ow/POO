<?php
class Dame extends Character
{
    private $intelligence;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->selectDame();
    }

    private function selectDame(){
        $dames = array(
            'Maeglin' => array(
                'caste' => 'Archer',
                'intelligence' => 100,
                'life' => 14,
                'surname' => 'Oeil vif',
                'knowledge' => 'Nombres',
            ),
            'Athelleen' => array(
                'caste' => 'Guerrier',
                'intelligence' => 90,
                'life' => 15,
                'surname' => 'Guerrière des flammes',
                'knowledge' => 'Cartographie',
            ),
            'Nolofinwe' => array(
                'caste' => 'Chevalier',
                'intelligence' => 110,
                'life' => 13,
                'surname' => 'Sagesse',
                'knowledge' => 'Diplomatie',
            ),
            'Eldalote' => array(
                'caste' => 'Elfe',
                'intelligence' => 120,
                'life' => 12,
                'surname' => 'Fleur elfique',
                'knowledge' => 'Arts',
            ),
            'Anardil' => array(
                'caste' => 'Magicien',
                'intelligence' => 130,
                'life' => 11,
                'surname' => 'Amie du soleil',
                'knowledge' => 'Sciences',
            ),
            'Rumil' => array(
                'caste' => 'Érudit',
                'intelligence' => 140,
                'life' => 10,
                'surname' => 'La savante',
                'knowledge' => 'Lettres',
            ),
        );
        $name = $this->getName();
        foreach ($dames[$name] as $key => $value){
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