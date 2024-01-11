<?php

namespace App\Controller;
use App\Model\RelatorioModel;

class RelatorioController extends Controller
{
    public static function enviar()
    {
        $mensagem = $_GET['cd'] . " - " . $_POST['texto'];

        $model = new RelatorioModel();
        $model->Titulo = $_POST['titulo'];
        $model->Mensagem = $mensagem;
        $model->inserir();

        header('Location: /StockMaster/App/produto/detalhes' . '?cd=' . $_GET['cd']);
    }
}