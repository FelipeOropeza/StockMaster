<?php

use App\Controller\LoginController;

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        LoginController::login();
        break;

    case 'home':
        echo "Página home";
        break;

    default:
        echo "Erro 404 - Página não encontrada";
        break;
}