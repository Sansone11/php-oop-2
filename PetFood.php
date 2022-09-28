<?php
include_once __DIR__.'/product.php';
include_once __DIR__.'/trait.php';
class PetFood extends Product{
    use Animale;
    public $ingredienti;

    public function __construct($param){
        parent:: __construct($param);
        $this->setAnimale($param['animale']);
        $this->ingredienti =$param['ingredienti'];

    }
}
  
