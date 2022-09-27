<?php
include_once __DIR__.'/PetFood.php';
$data = [
    "name"=>"crocchetta di manzo",
    "price"=>19,99,
    "poster"=>"https://m.media-amazon.com/images/I/71Qr6U6mxYL._AC_UL480_FMwebp_QL65_.jpg",
    "description"=>"Le migliori croccchette sulla piazza",
    "weight"=>"300g",
    "volume"=>"1,5L",
    "brand"=>"Kitthen",
    "categories"=>"food",
];

$crocchette = new Petfood($data);
var_dump($crocchette);
