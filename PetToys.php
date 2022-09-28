<?php
include_once __DIR__.'/product.php';
include_once __DIR__.'/trait.php';
class PetToys extends Product{
    use Animale;
    public $giochi;

    public function __construct($param){
        parent:: __construct($param);
        $this->setAnimale($param['animale']);
        $this->giochi =$param['giochi'];

    }
}
  