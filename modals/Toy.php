<?php

require_once __DIR__ . '/../traits/Discount.php';

class Toy extends Product{

    private $genre; 
    use Discount; 

    public function __construct(string $_category, string $_type, string $_name, string $_img,  float $_price, string $_genre)
    {
        parent::__construct($_category, $_type, $_name, $_img, $_price);
        $this->genre = $_genre; 

    }

    public function getGenre(){
        return $this->genre; 
    }

    public function setGenre($_genre){
        return $this->genre = $_genre; 
    }

}

?>