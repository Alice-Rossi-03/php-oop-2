<?php

trait Discount{
    private $discount;

    public function setDiscount($_discount, $_unit){
        $this->discount = $_discount . $_unit; 
    }

    public function getDiscount(){
        return $this->discount; 
    }
}

?>