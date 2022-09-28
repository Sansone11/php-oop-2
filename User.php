<?php
include_once __DIR__.'/product.php';
class User{
    public $name;
    public $email;
    public $address;
    public $productNumber;
    

    function __construct($name,$email, $address,$productNumber){
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->productNumber = $productNumber;            

    }
    
}