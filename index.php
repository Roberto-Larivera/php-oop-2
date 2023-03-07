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
    <link rel="stylesheet" href="style/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="container p-5">
            <div class="row">
                <div class="col text-center ">
                    <h1>
                        Shop ZooBools
                        <i class="fa-solid fa-paw"></i>
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container p-5">

            <h2>
                food category
            </h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-4">

                <?php foreach ($foodProducts as $foodProduct) { ?>
                    <div class="col mb-4">
                        <?php $foodProduct->printFood($foodProduct) ?>
                    </div>
                <?php } ?>
            </div>

            <h2>
                game category
            </h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-4">
                <?php foreach ($gameProducts as $foodProduct) { ?>
                    <div class="col mb-4">
                        <?php $foodProduct->printGame($foodProduct) ?>
                    </div>
                <?php } ?>
            </div>

            <h2>
                kennel category
            </h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-4">
                <?php foreach ($kennelProducts as $foodProduct) { ?>
                    <div class="col mb-4">
                        <?php $foodProduct->printKennel($foodProduct) ?>
                    </div>
                <?php } ?>
            </div>
        </div>
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