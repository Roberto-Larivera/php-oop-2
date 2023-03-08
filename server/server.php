<?php
require_once __DIR__ . '/./db.php';
require_once __DIR__ . '/../model/Client.php';

$_SESSION['numCredit'] = $_GET['number_credit'] ?? null;
$_SESSION['holdCredit'] = $_GET['holder_credit'] ?? null;
$_SESSION['cvvCredit'] = $_GET['cvv_credit'] ?? null;
$_SESSION['dateCredit'] = $_GET['date_credit'] ?? null;
$_SESSION['priceProduct'] = null;
$_SESSION['buyProduct'] = null;
if (
    isset($_SESSION['holdCredit']) &&
    isset($_SESSION['numCredit']) &&
    isset($_SESSION['cvvCredit']) &&
    isset($_SESSION['dateCredit'])
) {


    echo'ok';
    if (strlen($_SESSION['numCredit']) == 16 && is_numeric($_SESSION['numCredit']) && strlen($_SESSION['cvvCredit']) == 3 && is_numeric($_SESSION['cvvCredit'])) {
        if ($adminUser->setCheckDateCreditCard($_SESSION['dateCredit'])) {
            $element = null;

            if ($_SESSION['pageBuyTYPE'] == 'food') {
                $element = $_SESSION['foodProducts'];
                $element = $element[$_SESSION['pageBuyID']];
            } elseif ($_SESSION['pageBuyTYPE'] == 'game') {
                $element = $_SESSION['gameProducts'];
                $element = $element[$_SESSION['pageBuyID']];
            } elseif ($_SESSION['pageBuyTYPE'] == 'kennel') {
                $element = $_SESSION['kennelProducts'];
                $element = $element[$_SESSION['pageBuyID']];
            }
            if ($_SESSION['sessionAccess']) {
                $_SESSION['priceProduct'] = $element->getPrice();
                $_SESSION['buyProduct'] = $adminUser->buy($element->getPrice(), 'user');
                header("location: ../index.php?shop=success");
                die();
            } elseif ($_SESSION['sessionGuest']) {
                $_SESSION['priceProduct'] = $element->getPrice();
                $_SESSION['buyProduct'] = $adminUser->buy($element->getPrice(), 'guest');
                header("location: ../index.php?shop=success");
                die();
            } else {
                header("location: ../index.php?shop=failed");
                die();
            }
        } else {
            //header("location: ../index.php?shop=failed");
            die();
        }
    } else {
        //header("location: ../index.php?shop=failed");
        die();
    }
}
