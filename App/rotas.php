<?php

use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\PerfilController;
use App\Controller\ProdutoController;
use App\Controller\RelatorioController;

include 'Services/Utils.php';


$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        LoginController::login();
        break;

    case 'login/logout':
        LoginController::logout();
        break;

    case 'home/index':
        HomeController::index();
        break;

    case 'perfil/perfil':
        PerfilController::perfil();
        break;

    case 'produto/detalhes':
        ProdutoController::detalhes();
        break;

    case 'relatorio/enviar':
        RelatorioController::enviar();
        break;
    default:
        echo "Erro 404 - Página não encontrada";
        break;
}
