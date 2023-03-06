<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Product.php';


class Food extends Product
{

    protected $weight;
    protected $description;
    protected $lot;
    protected $analyticalComponents;
    protected $priceKg;


    function __construct(string $nameCategory, string $iconCategory, string $productName, float $price, bool $availability, string $productCode, array $images, float $priceKg, float $weight, string $description, string $lot, string $analyticalComponents)
    {
        parent::__construct($nameCategory, $iconCategory, $productName, $price, $availability, $productCode, $images);
        $this->weight = $weight;
        $this->description = $description;
        $this->lot = $lot;
        $this->analyticalComponents = $analyticalComponents;
        $this->priceKg = $priceKg;
    }

    public function getWeight()
    {
        return $this->weight;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getLot()
    {
        return $this->lot;
    }
    public function getAnalyticalComponents()
    {
        return $this->analyticalComponents;
    }
    public function getPriceKg()
    {
        return $this->priceKg;
    }

    public function printFood($element)
    {
        echo '<div class="card h-100">';
        //card image
            echo '<div class="card-img-top">';
            foreach ($element->getImages() as $image) {
                echo '<img class="w-100" src="' . $image . '">';
            }
            echo '</div>';
             
             //card body
            echo '<div class="card-body d-flex flex-column justify-content-between">';
                //nome categoria
                echo '<h6 class="card-title"> @' .$element->getNameCategory();
                //icona categoria
                    if ($element->getNameCategory() == 'dog') {
                        echo '<i class="fa-solid fa-dog ms-3"></i>';
                    } elseif ($element->getNameCategory() == 'cat') {
                        echo '<i class="fa-solid fa-cat ms-3"></i>';
                    }
                echo ' </h6>';
                //nome prodotto
                echo '<h5 class="card-title">' .$element->getProductName(). '</h5>';
                //codice prodotto
                echo '<div class="card-text cod_prod"> #' .$element->getProductCode() . '</div>';
                //icona disponibilità
                echo '<div>';
                    if ($element->getAvailability() === true) {
                        echo '<i class="fa-solid fa-check text-success"></i>';
                    } elseif ($element->getAvailability() === false) {
                        echo '<i class="fa-solid fa-xmark text-danger"></i>';
                    }
                echo '</div>';

                //lotto prodotto
                echo '<span class="card-text">lotto: ' . $element->getLot() . '</span>';
                //descrizione prodotto
                echo '<p class="card-text text-truncate">' . $element->getDescription() . '</p>';
                //prezzo prodotto
                echo '<div>';
                        echo '<span>'.$element->getPrice() . ' €' . '</span>';
                        echo '<span>' . $element->getPriceKg() . ' kg/€' . '</span>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
