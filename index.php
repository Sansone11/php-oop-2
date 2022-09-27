<?php
include_once __DIR__.'/PetToys.php';
include_once __DIR__.'/PetFood.php';
include_once __DIR__.'/PetStyle.php';
$food = [
    "name"=>"crocchetta di manzo",
    "price"=>19,99,
    "poster"=>"https://m.mediAC_UL480_FMwebp_QL65_.jpg",
    "description"=>"Le migliori crocchette sulla piazza",
    "weight"=>"300g",
    "brand"=>"Meow-Mix",
    "categories"=>"food",
];

$crocchette = new Petfood($food);
// var_dump($crocchette);

$toys = [
    "name"=>"tira graffi",
    "price"=>229,99,
    "poster"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWN38qtzfrXfoExNxTHwbbP_snM_Txq0j2czam-9OY4A&s",
    "description"=>"il miglior giocattolo per il tuo amico",
    "weight"=>"500g",
    "brand"=>"Meow-Mix",
    "categories"=>"PetToys",
];

$tiragraffi = new PetToys($toys);
// var_dump($tiragraffi);

$clothes = [
    "name"=>"giacca a vento",
    "price"=>39,99,
    "poster"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWN38qtzfrXfoExNxTHwbbP_snM_Txq0j2czam-9OY4A&s",
    "description"=>"segui i trend del momento",
    "weight"=>"30g",
    "brand"=>"Meow-Mix",
    "categories"=>"Petclothes",
];

$moda = new PetStyle($clothes);
// var_dump($moda);

$tot=[
    $crocchette,
    $tiragraffi,
    $moda,
];
var_dump($tot);

$cart = new Cart('', '', 0);
$total_price = $cart->setTotalPrice($tot);
echo 'il totale è di... '.$total_price .'€';



