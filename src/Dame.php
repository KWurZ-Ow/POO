<?php
class Dame extends Character
{
    private $intelligence;

    public function __construct(string $name)
    {
        parent::__construct($name);
        switch ($name){
            case 'Maeglin':
                $this->surname = 'Oeil vif';
                $this->caste = 'Archer';
                $this->knowledge = 'Nombres';
                $this->intelligence = 100;
                $this->life = 15;
                break;
            case 'Athelleen':
                $this->surname = 'Guerriere des flammes';
                $this->caste = 'Guerriere';
                $this->knowledge = 'Carthographie';
                $this->intelligence = 90;
                $this->life = 14;
                break;
            case 'Nolofinwë':
                $this->surname = 'Sagesse';
                $this->caste = 'Chevalier';
                $this->knowledge = 'Diplomatie';
                $this->intelligence = 110;
                $this->life = 13;
                break;         
            case 'Eldalotë':
                $this->surname = 'Fleur elfique';
                $this->caste = 'Elfe';
                $this->knowledge = 'Arts';
                $this->intelligence = 120;
                $this->life = 12; 
                break;
            case 'Anardil':
                $this->surname = 'Amie du soleil';
                $this->caste = 'Magicien';
                $this->knowledge = 'Sciences';
                $this->intelligence = 130;
                $this->life = 11;
                break;
            case 'Rumil':
                $this->surname = 'La savante';
                $this->caste = 'Erudit';
                $this->knowledge = 'Lettres';
                $this->intelligence = 140;
                $this->life = 10;
                break;
            default:    
                $this->surname = null;
                $this->caste = null;
                $this->knowledge = null;
                $this->intelligence = 100;
                $this->life = 15;
                break;
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