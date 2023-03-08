<?php
require_once __DIR__ . '/./server/db.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$sessionAccess = false;
$sessionGuest = false;

if (isset($_GET['login']) && $_GET['login'] !=='failed' && isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo 'accesso eseguito';
    $sessionAccess = true;
    $datiAdminUser = $adminUser->getCreditCard();
    var_dump($sessionAccess);
}
if (isset($_SESSION['guest'])) {
    echo 'accesso eseguito guest';
    $sessionGuest = true;
    var_dump($sessionGuest);
}
// cerchiamo se sono stati inviati dati per l'articolo da acquistare
// inn tal caso li salviamo come variabile di sessione
if (!isset($_SESSION['pageBuyTYPE']) && !isset($_SESSION['pageBuyID'])) {
    $_SESSION['pageBuyTYPE'] = $_GET['product_type'] ?? null;
    $_SESSION['pageBuyID'] = $_GET['product_id'] ?? null;
}

var_dump(isset($_GET['product_type']));
var_dump(isset($_GET['product_id']));
var_dump($_SESSION['pageBuyID']);
var_dump($_SESSION['pageBuyTYPE']);
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
                        <?php if ($_SESSION['pageBuyTYPE'] == 'food') {
                            $product = $foodProducts[$_SESSION['pageBuyID']];
                            $product->printCard($product, $_SESSION['pageBuyID']);
                        } elseif ($_SESSION['pageBuyTYPE'] == 'game') {
                            $product = $gameProducts[$_SESSION['pageBuyID']];
                            $product->printCard($product, $_SESSION['pageBuyID']);
                        } elseif ($_SESSION['pageBuyTYPE'] == 'kennel') {
                            $product = $kennelProducts[$_SESSION['pageBuyID']];
                            $product->printCard($product, $_SESSION['pageBuyID']);
                        } else {
                            throw new Exception('C\'è stato un errore dopo il click su Acquista');
                        }

                        ?>
                    </div>
                    <?php if ($sessionAccess == false && $sessionGuest == false) { ?>
                        <div class="col-4 align-self-center">
                            <div class="card border-light">
                                <div class="card-body">
                                    <form action="./server/login.php" method="GET">
                                        <div class="row row-cols-1">
                                            <div class="col">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="#" required>
                                                    <label for="username" class="floatingInput">User</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mb-4">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="#" required>
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
                                                <a href="./server/login.php?ospit=guest" class="btn btn-success " role="button"> Acquista come Ospite </a>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } elseif ($sessionAccess == true) { ?>
                        <div class="col-4 align-self-center">
                            <div class="card border-light p-5 text-center">

                                <h3 class="text-success">
                                    Accesso Eseguito
                                </h3>

                            </div>
                        </div>
                    <?php } elseif ($sessionGuest == true) { ?>
                        <div class="col-4 align-self-center">
                            <div class="card border-light p-5 text-center">

                                <h3 class="text-success">
                                    Accesso Guest Eseguito
                                </h3>

                            </div>
                        </div>
                    <?php } ?>
                    <?php if($sessionAccess == true || $sessionGuest == true) { ?>
                    <div class="col-4 align-self-center">
                        <div class="card border-light">
                            <div class="card-body">
                                <form action="" method="">
                                    <div class="row row-cols-1">
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="number_credit" name="number_credit" placeholder="#" minlenght="16" maxlenght="16" required 
                                                <?php 
                                                if($sessionAccess == true){

                                                    echo'value="'.$datiAdminUser['creditCardNumber'].'"'; 
                                                }
                                                ?>
                                                >
                                                <label for="number_credit" class="floatingInput">Numero Carta</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-4">
                                                <input type="text" class="form-control" id="holder_credit" name="holder_credit" placeholder="#" required
                                                <?php 
                                                if($sessionAccess == true){

                                                    echo'value="'.$datiAdminUser['creditCardHolder'].'"'; 
                                                }
                                                ?>
                                                >
                                                <label for="holder_credit" class="floatingInput">Intestatario</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-4">
                                                <input type="text" class="form-control" id="cvv_credit" name="cvv_credit" placeholder="#" minlenght="3" maxlenght="3" required
                                                <?php 
                                                if($sessionAccess == true){

                                                    echo'value="'.$datiAdminUser['creditCardCode'].'"'; 
                                                }
                                                ?>
                                                >
                                                <label for="cvv_credit" class="floatingInput">Codice CVV</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-4">
                                                <input type="text" class="form-control" id="date_credit" name="date_credit" placeholder="#" minlenght="3" maxlenght="3" required
                                                <?php 
                                                if($sessionAccess == true){

                                                    echo'value="'.$datiAdminUser['creditCardExpiration'].'"'; 
                                                }
                                                ?>
                                                >
                                                <label for="date_credit" class="floatingInput">Data di scadenza</label>
                                            </div>
                                        </div>
                                        <div class="col text-center mb-1">
                                            <button type="submit" class="btn btn-primary">Acquista</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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