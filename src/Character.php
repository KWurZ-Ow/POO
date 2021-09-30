<?php

class Character
{
    const GAME_NAME = "La Guilde des Seigneurs";
    protected $id;
    protected $name;
    protected $surname;
    protected $caste;
    protected $knowledge;
    protected $life;
    protected $image;
    
    public function __construct(string $name)
    {
        $this->id = 1;
        $this->name = $name;
        $this->image = '/images/'.strtolower($name).'.jpg';
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
    public function getSurname() :string
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
    public function getCaste() :string
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
    public function getKnowledge() :string
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
     * Get the value of life
     */ 
    public function getLife() :int
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
    public function getImage() :string
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

     /**
     * Get the value of game name
     */ 
    public function getGameName() :string
    {
        return self::GAME_NAME;
    }
}