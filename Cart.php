<?php
class Cart {
    public $name;
    public $email;
    public $productNumber;
    public $TotalPrice;

    function __construct($name,$email,$productNumber)
    {
        $this->name = $name;
        $this->email = $email;
        $this->productNumber = $productNumber;
    }
   
    function setTotalPrice($products)
    {
        $this->TotalPrice = 0;
        foreach ($products as $product) {
            $this->TotalPrice += $product->price;
        }
        return $this->TotalPrice;
    }
   

};