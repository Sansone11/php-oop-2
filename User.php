<?php
include_once __DIR__.'/product.php';
require_once __DIR__.'/trait.php';
require_once __DIR__.'/index.php';
require_once __DIR__.'/Cart.php';
class User extends Cart{
    public $name;
    public $email;
    public $address;
    public $productNumber;
    public $cap;
    

    function __construct($param){
        $this->name = $param['name'];
        $this->email = $param['email'];
        $this->address =$param['address'];
        $this->productNumber = $param['productNumber'];  
        $this->cap = $param['cap'];        
    }

}
