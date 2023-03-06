<?php
require_once __DIR__.'/Product.php';


class Game extends Product
{

    protected $description;
    protected $quantity;



    function __construct(string $nameCategory, string $iconCategory, string $productName, float $price, bool $availability, string $productCode, Array $images, string $description, int $quantity)
    {
        parent::__construct($nameCategory, $iconCategory, $productName, $price, $availability, $productCode, $images);
        $this->description = $description;
        $this->quantity = $quantity;

    }

    public function getDescription(){
        return $this->description;
    }
    public function getQuantity(){
        return $this->quantity;
    }

    public function printGame($element)
    {
        echo '<div class="card h-100">';
        //card image
            echo '<div class="card-img-top">';
            foreach ($element->getImages() as $image) {
                echo '<img class="w-100" src="' . $image . '">';
            }
            echo '</div>';
             
             //card body
            echo '<div class="card-body">';
                //nome prodotto
                echo '<h5 class="card-title">' .$element->getProductName(). '</h5>';
                //nome categoria
                echo '<h6 class="card-title">' .$element->getNameCategory(). ' </h6>';
                //icona categoria
                if ($element->getNameCategory() == 'dog') {
                    echo '<i class="fa-solid fa-dog"></i>';
                } elseif ($element->getNameCategory() == 'cat') {
                    echo '<i class="fa-solid fa-cat"></i>';
                }
                //codice prodotto
                echo '<span class="card-text">' .$element->getProductCode() . '</span>';
                //icona disponibilità
                echo '<div>';
                    if ($element->getAvailability() === true) {
                        echo '<i class="fa-solid fa-check"></i>';
                    } elseif ($element->getAvailability() === false) {
                        echo '<i class="fa-solid fa-xmark"></i>';
                    }
                echo '</div>';

                //descrizione prodotto
                echo '<p class="card-text">' . $element->getDescription() . '</p>';
                //quantita prodotto
                echo '<div>';
                        echo '<span>'.$element->getQuantity() . '</span>';
                echo '</div>';
                //prezzo prodotto
                echo '<div>';
                        echo '<span>'.$element->getPrice() . ' €' . '</span>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }

}