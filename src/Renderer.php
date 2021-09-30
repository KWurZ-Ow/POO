<?php
class Renderer
{
    private $template;
    public function __construct(string $template){
        $this->setTemplate($template);
    }
    public function render($object){
        ob_start();
        require_once($this->template);
        ob_end_flush();
    }

    /**
     * Get the value of template
     */ 
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set the value of template
     *
     * @return  self
     */ 
    public function setTemplate($template)
    {
        $this->template = __DIR__ . '/../../templates/' . $template . '.php';

        return $this;
    }
}