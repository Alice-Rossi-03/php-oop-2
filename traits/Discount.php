<?php

trait Discount{
    private $discount;

    public function setDiscount($_discount, $_unit){

        try{
            if( !is_numeric( $_discount)){
                throw new Exception('Its not a number');
            } 
            $this->discount = $_discount . $_unit; 
        } catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }

    public function getDiscount(){
        return $this->discount; 
    }

}

?>