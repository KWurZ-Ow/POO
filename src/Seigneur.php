<?php
class Seigneur extends Character
{
    private $intelligence;

    public function __construct(string $name)
    {
        parent::__construct($name);
        switch ($name){
            case 'Celeborn':
                $this->surname = 'Arbre d\'argent';
                $this->caste = 'Archer';
                $this->knowledge = 'Nombres';
                $this->intelligence = 100;
                $this->life = 15;
                break;
            case 'Calimethar':
                $this->surname = 'Guerrier des lumières';
                $this->caste = 'Guerrier';
                $this->knowledge = 'Carthographie';
                $this->intelligence = 90;
                $this->life = 14;
                break;
            case 'Gorthol':
                $this->surname = 'Haume de terreur';
                $this->caste = 'Chevalier';
                $this->knowledge = 'Diplomatie';
                $this->intelligence = 110;
                $this->life = 13;
                break;         
            case 'Elendur':
                $this->surname = 'Serviteur des étoiles';
                $this->caste = 'Elfe';
                $this->knowledge = 'Arts';
                $this->intelligence = 120;
                $this->life = 12; 
                break;
            case 'Anfauglith':
                $this->surname = 'Poussière d\'agonie';
                $this->caste = 'Magicien';
                $this->knowledge = 'Sciences';
                $this->intelligence = 130;
                $this->life = 11;
                break;
            case 'Curambar':
                $this->surname = 'Maître du destin';
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