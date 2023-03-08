<?php
require_once __DIR__ . '/db.php';

$pageBuyID = $_GET['product_id'] ?? null;
$pageBuyTYPE = $_GET['product_type'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop ZooBools</title>
    <link rel="icon" type="image/svg+xml" href="./img/paw-solid.svg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="container p-5">
            <div class="row">
                <div class="col text-center">
                    <h1>
                        Shop ZooBools
                        <i class="fa-solid fa-paw"></i>
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php if ($pageBuyID === null) { ?>
            <div class="container p-5">

                <h2>
                    food category
                </h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-4">

                    <?php foreach ($foodProducts as $index => $foodProduct) { ?>
                        <div class="col mb-4">
                            <?php $foodProduct->printCard($foodProduct, $index) ?>
                        </div>
                    <?php } ?>
                </div>

                <h2>
                    game category
                </h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-4">
                    <?php foreach ($gameProducts as $index => $foodProduct) { ?>
                        <div class="col mb-4">
                            <?php $foodProduct->printCard($foodProduct, $index) ?>
                        </div>
                    <?php } ?>
                </div>

                <h2>
                    kennel category
                </h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-4">
                    <?php foreach ($kennelProducts as $index => $foodProduct) { ?>
                        <div class="col mb-4">
                            <?php $foodProduct->printCard($foodProduct, $index) ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } elseif ($pageBuyID !== null) { ?>
            <div class="container p-5">
                <div class="row mb-4">
                    <div class="col-4">
                        <?php if ($pageBuyTYPE == 'food') {
                            $product = $foodProducts[$pageBuyID];
                            $product->printCard($product, $pageBuyID);
                        } elseif ($pageBuyTYPE == 'game') {
                            $product = $gameProducts[$pageBuyID];
                            $product->printCard($product, $pageBuyID);
                        } elseif ($pageBuyTYPE == 'kennel') {
                            $product = $kennelProducts[$pageBuyID];
                            $product->printCard($product, $pageBuyID);
                        } else {
                            throw new Exception('C\'è stato un errore dopo il click su Acquista');
                        }

                        ?>
                    </div>
                    <div class="col-8">
                        
                    </div>
                </div>
            <?php } ?>
    </main>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>