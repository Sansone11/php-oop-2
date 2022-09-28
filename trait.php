<?php
trait getOrder
{
    public $name;
    public $email;
    public $productNumber;
    public $TotalPrice;
    function setTotalPrice($products)
    {
        $this->TotalPrice = 0;
        foreach ($products as $product) {
            $this->TotalPrice += $product->price;
        }
        return $this->TotalPrice;
    }
}
