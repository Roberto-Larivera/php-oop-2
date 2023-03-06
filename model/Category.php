<?php
class Category {
    public $nameCategory;
    public $iconCategory;

    function __construct(string $nameCategory, string $iconCategory){    
        $this -> nameCategory = $nameCategory;
        $this -> iconCategory = $iconCategory;
    }
}

$dogCategory = new Category('Dog','#');
$catCategory = new Category('Cat','#');
