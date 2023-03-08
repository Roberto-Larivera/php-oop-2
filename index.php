<?php
require_once __DIR__ . '/db.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// cerchiamo se sono stati inviati dati per l'articolo da acquistare
$pageBuyID = $_GET['product_id'] ?? null;
$pageBuyTYPE = $_GET['product_type'] ?? null;
// inn tal caso li salviamo come variabile di sessione
if (isset($pageBuyID) && $pageBuyID !== null && isset($pageBuyTYPE) && $pageBuyTYPE !== null) {
    $_SESSION['pageBuyID'] = $pageBuyID;
    $_SESSION['pageBuyTYPE'] = $pageBuyTYPE;
}
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
        <?php if (!isset($_SESSION['pageBuyID'])) { ?>
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
        <?php } elseif (isset($_SESSION['pageBuyID']) && $_SESSION['pageBuyID'] !== null) { ?>
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
                    <div class="col-4 align-self-center">
                        <div class="card border-light">
                            <div class="card-body">
                                <form action="">
                                    <div class="row row-cols-1">
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Titolo del film" required>
                                                <label for="username" class="floatingInput">User</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-4">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Titolo del film" required>
                                                <label for="password" class="floatingInput">Password</label>
                                            </div>
                                        </div>
                                        <div class="col text-center mb-1">
                                            <button type="submit" class="btn btn-primary">Accedi</button>
                                        </div>
                                        <div class="col text-center mb-4">
                                            <a class="text-decoration-none" href="#nogo">Non hai un Account? Registrati subito!</a>
                                        </div>
                                        <div class="col text-center">
                                            <a href="#nogo" class="btn btn-success " role="button"> Acquista come Ospite </a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
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