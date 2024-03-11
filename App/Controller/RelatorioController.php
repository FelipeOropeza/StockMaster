<?php

namespace App\Controller;

use App\Model\RelatorioModel;
use App\Services\Session;

class RelatorioController extends Controller
{
    public static function enviar()
    {
        Session::start();
        parent::authentic();
        
        $model = new RelatorioModel();

        if (empty($_GET['cd'])) {
            $model->Titulo = $_POST['titulo'];
            $model->Mensagem = $_POST['texto'];
            $model->inserir();

            header('Location: /StockMaster/App/perfil/index' . '?arq=' . $_GET['arq']);

        } else {
            $mensagem = $_GET['cd'] . " - " . $_POST['texto'];
            $model->Titulo = $_POST['titulo'];
            $model->Mensagem = $mensagem;
            $model->inserir();

            header('Location: /StockMaster/App/produto/detalhes' . '?cd=' . $_GET['cd']);
        }
    }
}
