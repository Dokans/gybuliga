<?php
session_start();
require_once "config/inc.php";

$admin = new loginAdmin($database, $template);


if (!isset($_SESSION['name'])) {
    if (isset($_POST['login'])) {
        try {
            $admin->logIn($_POST['login']);
        } catch (ErrorException $exception) {
            session_destroy();
            $admin->showLogin($exception->getMessage());
            die();
        }
    } else {
        $admin->showLogin();
        die();
    }
} else {
    $timeSinceLastLogin = strtotime(date("H:i")) - strtotime($_SESSION['lastEntry']);
    if ($timeSinceLastLogin >= 10000000) {
        session_destroy();
        $admin->showLogin("Vaše přihlášení vypršelo");
        die();
    }
    $admin->enterAdmin();
}


