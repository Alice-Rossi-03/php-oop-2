<?php

class Food extends Product{

    private $calories; 

    public function __construct(string $_category, string $_type, string $_name, string $_img,  float $_price, string $_calories)
    {
        parent::__construct($_category, $_type, $_name, $_img, $_price);
        $this->calories = $_calories; 

    }

    public function getCalories(){
        return $this->calories; 
    }

    public function setCalories($_calories){
        return $this->calories = $_calories; 
    }

}

?>