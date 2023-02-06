<?php

include_once __DIR__ . '/category.php';

class products {

    protected String $title;
    protected String $image;
    protected Float $price;
    public category $category;

    function __construct(String $_title, String $_image, Float $_price, category $_category) {
        $this->setTitle($_title);
        $this->setImage($_image);
        $this->setPrice($_price);
        $this->category = $_category;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($_title) {
        $this->title = $_title;
        return $this;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($_image) {
        $this->image = $_image;
        return $this;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($_price) {
        $this->price = $_price;
        return $this;
    }
}
  
?>