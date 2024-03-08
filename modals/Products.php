<?php

class Product{
    private $category; 
    private $type; 
    private $name; 
    private $img; 
    private $price; 
    
    public function __construct(string $_category, string $_type, string $_name, string $_img,  float $_price) {
        $this->category = $_category;
        $this->type = $_type;
        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
    }

    // category 
    public function getCategory(){
        return $this->category; 
    }

    public function setCategory($_category){
        return $this->category = $_category; 
    }

    // category 
    public function getType(){
        return $this->type; 
    }

    public function setType($_type){
        return $this->type = $_type; 
    }

    // name
    public function getName(){
        return $this->name; 
    }

    public function setName($_name){
        return $this->name = $_name; 
    }

    // img
    public function getImg(){
        return $this->img; 
    }

    public function setImg($_img){
        return $this->img = $_img; 
    }

    // price
    public function getPrice(){
        return $this->price; 
    }

    public function setPrice($_price){
        return $this->price = $_price; 
    }


}

?>