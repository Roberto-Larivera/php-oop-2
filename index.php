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
            <div class="col">
                <h2>
                    nome categoria <?php echo $newProduct1 -> nameCategory?>
                </h2>
                <i class="fa-solid fa-dog"></i>
                <h1>
                    nome prodotto <?php echo $newProduct1 -> productName?>
                </h1>
                <div>
                    <span>
                        prezzo  <?php echo $newProduct1 -> price?>
                    </span>
                    <span>
                        prezzo kg <?php echo $newProduct1 -> priceKg?>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-check"></i>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div>
                    img-s prodotto
                    <img src="#">
                </div>
                <span>
                    codice prodotto <?php echo $newProduct1 -> productCode?>
                </span>
                <p>
                    descrizione prodotto <?php echo $newProduct1 -> description?>
                </p>
                <span>
                    lotto <?php echo $newProduct1 -> lot?>
                </span>
                <p>
                    Componenti analitici <?php echo $newProduct1 -> analyticalComponents?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>