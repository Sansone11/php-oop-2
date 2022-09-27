<?php 
class Product {
    public $name;
    public $price;
    public $poster;
    public $description;
    public $weight;
    public $brand;
    public $categories;

    // function __construct($name,$price=0,$poster, $description,$weight,$volume,$brand,$categories)
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

    public function setPrice($price){

    }
}

class Chart {
    public $name;
    public $email;
    public $productNumber;
    public $TotalPrice;

    function __construct($name,$email,$productNumber,$TotalPrice)
    {
        $this->name = $name;
        $this->email = $email;
        $this->productNumber = $productNumber;
        $this->TotalPrice = $TotalPrice;
    }
    function getTotalPrice($tot){
        foreach($tot as $value){
            
            
        }
        return $this -> $value;
    
    }
};


$chart = new Chart($tot);
$total_price = $chart->getTotalPrice($tot);
var_dump($totalPrice);






