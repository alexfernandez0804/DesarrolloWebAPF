<?php

class Pila{
    private elementos=[];
    private tope;
    private $max;

    public  function __construct($max) 
    {
        $this -> $max = $max;
        $this->tope=-1;

    }

    public function insertar($elem)
    {
        if ($this -> $max == $this-> tope)
        {
            echo "Pila llena";
        }
        else
        {
            $this -> elementos[$this->tope];
            $this -> tope++;
        }
    }

    public function elminar()
    {
        if ($this-> tope==0)
        {
            return "pila vacia";
        }
        else
        {
            $elem=elementos[$this->tope];
            $this -> tope--;
            return $elem;
        }
    }

    public function mostrar()
    {
        if ($this->tope==0)
        {
            return "pila vacia";
        }
        else
        {
            $elem=elementos[$this->tope];
        }
    }

}