<?php 
require_once __DIR__ .'/trait.php';
class Product {
    public $name;
    public $price;
    public $poster;
    public $description;
    public $weight;
    public $brand;
    public $categories;

   
    function __construct($param)
    {
     $this-> name = $param['name'];
     $this-> price = $param['price']; 
     $this-> poster = $param['poster']; 
     $this-> description = $param['description']; 
     $this-> weight = $param['weight'];  
     $this-> brand = $param['brand']; 
     $this-> categories = $param['categories'];    
    }

}









