<?php
require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product) {?>
                <div class="col">
                    <h2>
                        nome categoria <?php echo $product->getNameCategory() ?>
                    </h2>
                    <?php if ($product->getNameCategory() == 'dog') { ?>
                        <i class="fa-solid fa-dog"></i>
                    <?php } elseif ($product->getNameCategory() == 'cat') { ?>
                        <i class="fa-solid fa-cat"></i>
                    <?php } ?>
                    <h1>
                        nome prodotto <?php echo $product->getProductName() ?>
                    </h1>
                    <div>
                        <span>
                            prezzo <?php echo $product->getPrice() ?>
                        </span>
                        <span>
                            prezzo kg <?php echo $product->getPriceKg() ?>
                        </span>
                    </div>
                    <div>
                    <?php if ($product->getAvailability() === true) { ?>
                        <i class="fa-solid fa-check"></i>
                    <?php } elseif ($product->getAvailability() === false) { ?>
                        <i class="fa-solid fa-xmark"></i>
                    <?php } ?>
                        
                        
                    </div>
                    <div>
                        img-s prodotto
                        <?php foreach($product->getImages() as $image){ ?>
                        <img <?php echo 'src="'.$image.'"' ?> >
                        <?php } ?>
                    </div>
                    <span>
                        codice prodotto <?php echo $product->getProductCode() ?>
                    </span>
                    <p>
                        descrizione prodotto <?php echo $product->getDescription() ?>
                    </p>
                    <span>
                        lotto <?php echo $product->getLot() ?>
                    </span>
                    <p>
                        Componenti analitici <?php echo $product->getAnalyticalComponents() ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>