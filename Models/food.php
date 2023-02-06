<?php

include_once __DIR__ . '/products.php';

class food extends products {

    public String $expirationDate;
    public Int $weight;
    public Array $ingredients;

    function __construct(String $_title, String $_image, Float $_price, category $_category, String $_expirationDate, Int $_weight, Array $_ingredients){
        parent::__construct($_title, $_image, $_price, $_category);
        $this->setExpirationDate($_expirationDate);
        $this->setWeight($_weight);
        $this->setIngredients($_ingredients);
    }


    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function setExpirationDate($_expirationDate){
        $this->expirationDate = $_expirationDate;
        return $this;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($_weight){
        $this->weight = $_weight;
        return $this;
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function setIngredients($_ingredients){
        $this->ingredients = $_ingredients;
        return $this;
    }
}

?>