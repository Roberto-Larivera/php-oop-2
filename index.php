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
</head>

<body>
    <header>
        <div class="container p-5">
            <div class="row">
                <div class="col text-center ">
                    <h1>
                        Shop ZooBloos
                        <i class="fa-solid fa-paw"></i>
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container p-5">

            <h2>
                product category
            </h2>
            <div class="row row-cols-4 mb-4">

                <?php foreach ($foodProducts as $foodProduct) { ?>
                    <div class="col">
                        <?php $foodProduct->printFood($foodProduct) ?>
                    </div>
                <?php } ?>
            </div>

            <h2>
                food category
            </h2>
            <div class="row row-cols-4 mb-4">
                <?php foreach ($gameProducts as $foodProduct) { ?>
                    <div class="col">
                        <?php $foodProduct->printGame($foodProduct) ?>
                    </div>
                <?php } ?>
            </div>

            <h2>
                game category
            </h2>
            <div class="row row-cols-4 mb-4">
                <?php foreach ($kennelProducts as $foodProduct) { ?>
                    <div class="col">
                        <?php $foodProduct->printKennel($foodProduct) ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>