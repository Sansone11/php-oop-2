<?php
include_once __DIR__.'/product.php';
include_once __DIR__.'/trait.php';
class PetStyle extends Product{
    use Animale;
    public $taglie;

    public function __construct($param){
        parent:: __construct($param);
        $this->setAnimale($param['animale']);
        $this->taglie =$param['taglie'];

    }
}