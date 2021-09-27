<?php
class Dame
{
    private $id;
    private $name;
    private $surname;
    private $caste;
    private $knowledge;
    private $intelligence;
    private $life;
    private $image;

    public function __construct(string $name)
    {
        $this->id = 1;
        $this->name = $name;
        $this->image = '/images/'.strtolower($name).'.jpg';

        switch ($name){
            case 'Maeglin':
                $this->surname = 'Oeil vif';
                $this->caste = 'Archer';
                $this->knowledge = 'Nombres';
                $this->intelligence = 100;
                $this->life = 15;
            case 'Athelleen':
                $this->surname = 'Guerriere des flammes';
                $this->caste = 'Guerriere';
                $this->knowledge = 'Carthographie';
                $this->intelligence = 90;
                $this->life = 14;
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
     * Get the value of name
     * @return string
     */ 
    public function getName() :string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     * @param string $name
     * @return  self
     */ 
    public function setName(?string $name) :self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(?int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname(?string $surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of caste
     */ 
    public function getCaste()
    {
        return $this->caste;
    }

    /**
     * Set the value of caste
     *
     * @return  self
     */ 
    public function setCaste(?string $caste)
    {
        $this->caste = $caste;

        return $this;
    }

    /**
     * Get the value of knowledge
     */ 
    public function getKnowledge()
    {
        return $this->knowledge;
    }

    /**
     * Set the value of knowledge
     *
     * @return  self
     */ 
    public function setKnowledge(?string $knowledge)
    {
        $this->knowledge = $knowledge;

        return $this;
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
    public function setIntelligence(?int $intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get the value of life
     */ 
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */ 
    public function setLife(?int $life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage(?string $image)
    {
        $this->image = $image;

        return $this;
    }
}