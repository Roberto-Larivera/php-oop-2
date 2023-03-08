<?php
require_once __DIR__ . '/./db.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['username'] = $_GET['username'] ?? null;
$_SESSION['password'] = $_GET['password'] ?? null;
$_SESSION['guest'] = $_GET['ospit'] ?? null;
// inn tal caso li salviamo come variabile di sessione
if (isset($_SESSION['username'])  && isset($_SESSION['password'])) {
    if($_SESSION['username'] == $adminUser->getUsername() && $_SESSION['password'] == $adminUser->getPassword()){
        header("location: ../index.php?login=success");
    }else{
        header("location: ../index.php?login=failed");
        die();
    }

}elseif(isset($_SESSION['guest'])){
    $_SESSION['guest'] = true;
    header("location: ../index.php?login=guest");
}else{
    header("location: ../index.php?login=failed");
}
