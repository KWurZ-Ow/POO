<?php
class Ennemi extends Character
{
    private $wickedness;

    public function __construct(string $name)
    {
        parent::__construct($name);
        switch ($name){
            case 'Gurthang':
                $this->surname = 'Fer de la mort';
                $this->caste = 'Bourreau';
                $this->knowledge = 'Nombres';
                $this->wickedness = 100;
                $this->life = 15;
                break;
            case 'Dagnir':
                $this->surname = 'Tourmenteur';
                $this->caste = 'Lycantrope';
                $this->knowledge = 'Carthographie';
                $this->wickedness = 90;
                $this->life = 14;
                break;
            case 'Aranurth':
                $this->surname = 'Colère du roi';
                $this->caste = 'Sorcier';
                $this->knowledge = 'Sciences';
                $this->wickedness = 110;
                $this->life = 13;
                break;
            default:    
                $this->surname = null;
                $this->caste = null;
                $this->knowledge = null;
                $this->wickedness = 100;
                $this->life = 15;
                break;
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