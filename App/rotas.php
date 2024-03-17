<?php

use App\Controller\CarrinhoController;
use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\PdfController;
use App\Controller\PedidoController;
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

    case 'perfil/index':
        PerfilController::index();
        break;

    case 'perfil/index/save':
        PerfilController::save();
        break;

    case 'produto/detalhes':
        ProdutoController::detalhes();
        break;

    case 'produto/save':
        ProdutoController::save();
        break;

    case 'produto/update':
        ProdutoController::update();
        break;

    case 'relatorio/enviar':
        RelatorioController::enviar();
        break;

    case 'carrinho/index':
        CarrinhoController::index();
        break;

    case 'carrinho/delete':
        CarrinhoController::deletar();
        break;

    case 'carrinho/addCarrinho':
        CarrinhoController::adicionar();
        break;

    case 'pedido/finaliza':
        PedidoController::finalizar();
        break;

    case 'pdf/download':
        PdfController::download();
        break;

    default:
        echo "Erro 404 - Página não encontrada";
        break;
}
