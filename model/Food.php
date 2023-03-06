<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Product.php';


class Food extends Product
{

    public $weight;
    public $description;
    public $lot;
    public $analyticalComponents;


    function __construct(string $nameCategory, string $iconCategory, string $nameProduct, float $price, float $priceKg, bool $availability, string $productCode, Array $images, float $weight, string $description, string $lot, $analyticalComponents)
    {
        parent::__construct($nameCategory, $iconCategory, $nameProduct, $price, $priceKg, $availability, $productCode, $images);
        $this->weight = $weight;
        $this->description = $description;
        $this->lot = $lot;
        $this->analyticalComponents = $analyticalComponents;
    }
}
