<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../traits/CheckDate.php';


class Food extends Product
{
    use CheckDate;

    protected $weight;
    protected $description;
    protected $expiration;
    protected $analyticalComponents;
    protected $priceKg;
    protected static $cod = 'food';


    function __construct(string $nameCategory, string $iconCategory, string $productName, float $price, bool $availability, string $productCode, array $images, float $priceKg, float $weight, string $description, string $expiration, string $analyticalComponents)
    {
        parent::__construct($nameCategory, $iconCategory, $productName, $price, $availability, $productCode, $images);
        $this->weight = $weight;
        $this->description = $description;
        $this->expiration = $this->setCheckDateProduct($expiration);
        $this->analyticalComponents = $analyticalComponents;
        $this->priceKg = $priceKg;
    }

    public function getCod(){
        return Food::$cod;
    }

    public function getWeight()
    {
        return $this->weight;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getExpiration()
    {
        return $this->expiration;
    }
    public function getAnalyticalComponents()
    {
        return $this->analyticalComponents;
    }
    public function getPriceKg()
    {
        return $this->priceKg;
    }

    // Non più utilizzata perché è stata creata la funzione printCard() dentro Product che stampa le card con i controlli differienzali per ogni classe esistente
    /*
    public function printFood($element)
    {
        echo '<div class="card border-light h-100">';
        //card image
            echo '<div class="card-img-top position-relative">';
            //foreach ($element->getImages() as $image) {
                $this->printSwiper($element);
                //echo '<img class="w-100" src="' . $image . '">';
            //}
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
                echo '<span class="card-text">Scadenza: ' . $element->getExpiration() . '</span>';
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
    */
}
