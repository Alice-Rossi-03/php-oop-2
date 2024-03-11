<?php

require_once __DIR__ . '/../traits/Discount.php';

class Kennel extends Product{

    private $size; 
    use Discount; 

    public function __construct(string $_category, string $_type, string $_name, string $_img,  float $_price, string $_size)
    {
        parent::__construct($_category, $_type, $_name, $_img, $_price);
        $this->size = $_size; 

    }

    public function getSize(){
        return $this->size; 
    }

    public function setSize($_size){
        return $this->size = $_size; 
    }




}

?>