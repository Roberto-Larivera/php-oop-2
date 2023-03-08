<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$username = $_GET['username'] ?? null;
$password = $_GET['password'] ?? null;
// inn tal caso li salviamo come variabile di sessione
if (isset($username) && $username !== null && isset($password) && $password !== null) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
}
