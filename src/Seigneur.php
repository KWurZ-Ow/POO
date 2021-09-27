<?php
class Seigneur
{
    private $id;
    private $name;
    private $surname;
    private $caste;
    private $knowledge;
    private $intelligence;
    private $life;
    private $image;


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
    public function setId($id)
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
    public function setSurname($surname)
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
    public function setCaste($caste)
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
    public function setKnowledge($knowledge)
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
    public function setIntelligence($intelligence)
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
    public function setLife($life)
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
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}