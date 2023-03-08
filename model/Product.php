<?php
require_once __DIR__ . '/Category.php';

class Product extends Category
{
    protected $productName;
    protected $price;
    protected bool $availability;
    protected  $images;
    protected  $productCode;




    function __construct(string $nameCategory, string $iconCategory, string $productName, float $price, bool $availability, string $productCode, array $images = [])
    {
        parent::__construct($nameCategory, $iconCategory);
        $this->productName = $productName;
        $this->price = $price;
        $this->availability = $availability;
        $this->productCode = $productCode;

        $this->images = $images;
    }


    public function getProductName()
    {
        return $this->productName;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getAvailability()
    {
        return $this->availability;
    }
    public function getImages()
    {
        return $this->images;
    }
    public function getProductCode()
    {
        return $this->productCode;
    }
    public function printSwiper($Slides)
    {
        echo '<div class="swiper mySwiper">';
        echo '<div class="swiper-wrapper">';
        foreach ($Slides->getImages() as $Slide) {
            echo '<div class="swiper-slide"><img class="w-100" src="' . $Slide . '"></div>';
        }
        echo '</div>';
        echo '<div class="swiper-button-next"></div>';
        echo '<div class="swiper-button-prev"></div>';
        echo '<div class="swiper-pagination"></div>';

        echo '</div>';
    }
    // *** Funzione printCard() che stampa le card con i controlli differienzali per ogni classe esistente  ***

    public function printCard($element, $index)
    {
        echo '<div class="card border-light h-100">';
        //card image
        echo '<div class="card-img-top position-relative">';
        $this->printSwiper($element);
        echo '</div>';

        //card body
        echo '<div class="card-body d-flex flex-column justify-content-between">';
        //nome categoria
        echo '<h6 class="card-title"> @' . $element->getNameCategory();
        //icona categoria
        if ($element->getNameCategory() == 'dog') {
            echo '<i class="fa-solid fa-dog ms-3"></i>';
        } elseif ($element->getNameCategory() == 'cat') {
            echo '<i class="fa-solid fa-cat ms-3"></i>';
        }
        echo ' </h6>';
        //nome prodotto
        echo '<h5 class="card-title">' . $element->getProductName() . '</h5>';
        //codice prodotto
        echo '<div class="card-text cod_prod"> #' . $element->getProductCode() . '</div>';
        //icona disponibilità
        echo '<div>';
        if ($element->getAvailability() === true) {
            echo '<i class="fa-solid fa-check text-success"></i>';
        } elseif ($element->getAvailability() === false) {
            echo '<i class="fa-solid fa-xmark text-danger"></i>';
        }
        echo '</div>';
        if (is_a($element, 'Food')) {
            //Scadenza prodotto -- Food
            echo '<span class="card-text">Scadenza: ' . $element->getExpiration() . '</span>';
        }
        //descrizione prodotto
        echo '<p class="card-text text-truncate">' . $element->getDescription() . '</p>';
        if (is_a($element, 'Kennel')) {
            //quantita prodotto -- Kennel
            echo '<div>';
            echo '<span>' . $element->getQuantity() . '</span>';
            echo '</div>';
        }
        //prezzo prodotto
        echo '<div>';
        echo '<span>' . $element->getPrice() . ' €' . '</span>';
        if (is_a($element, 'Food')) {
            // -- Food
            echo '<span class="ms-4">' . $element->getPriceKg() . ' kg/€' . '</span>';
        }
        echo '</div>';

        echo ' <a href="?product_type=' . $element->getCod() . '&product_id=' . $index . '" class="btn btn-success mt-3" role="button"> Acquista il prodotto </a>';


        echo '</div>';
        echo '</div>';
    }
}
