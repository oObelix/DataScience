<?php

class Product {
    private $price;
    protected $weight;
    
    public function __construct($price, $weight)
    {
        $this->price = $price;
        $this->weight = $weight;
    }
    
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    
    public function getPrice()
    {
        return $this->price;
    }
    
    public function getWeight()
    {
        return $this->weigh;
    }
}


class Socks extends Product {
    private $size;
    private $color;
    
    public function __construct($price, $weight, $size, $color)
    {
        parent::__construct($price, $weight);
        $this->size = $size;
        $this->color = $color;
    }
    
    public function getPrice()
    {
        return parent::getPrice();
    }
    
    public function about()
    {
        echo "We try to buy \"$this->color\" socks with size $this->size by price " . $this->getPrice() . "$. Weight: {$this->weight}kg";
    }
}


$white_socks = new Socks(2, .2, 44, "white");
$white_socks->about();


?>