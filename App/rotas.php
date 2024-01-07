<?php

use App\Controller\HomeController;
use App\Controller\LoginController;

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        LoginController::login();
        break;

    case 'logout':
        LoginController::logout();
        break;

    case 'home':
        HomeController::index();
        break;

    default:
        echo "Erro 404 - Página não encontrada";
        break;
}
