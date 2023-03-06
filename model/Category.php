<?php
class Category {
    protected $nameCategory;
    protected $iconCategory;

    function __construct(string $nameCategory, string $iconCategory){    
        $this -> nameCategory = $nameCategory;
        $this -> iconCategory = $iconCategory;
    }
    public function getNameCategory(){
        return $this->nameCategory;
    }
    public function getIconCategory(){
        return $this->iconCategory;
    }
}

$dogCategory = new Category('Dog','#');
$catCategory = new Category('Cat','#');
