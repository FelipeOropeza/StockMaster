<?php

namespace App\Controller;

abstract class Controller
{
    protected static function reader($view, $layout = 0, $model = null, $dados = array())
    {
        $arquivo_view = VIEWS . $view . ".php";
        $partes = explode("/", $view);
        $titulo_view = $partes[1];

        if (file_exists($arquivo_view) && $layout == 0) {
            extract($dados);
            include 'View/Template/nav.php';
            include $arquivo_view;
            include 'View/Template/rodape.php';
        } elseif (file_exists($arquivo_view) && $layout == 1) {
            extract($dados);
            include $arquivo_view;
        } else {
            exit('Arquivo da View não encontrado. Arquivo: ' . $arquivo_view);
        }
    }

    protected static function authentic()
    {
        if (empty($_SESSION['id'])) {
           return header('Location: /StockMaster/App/');
        }
    }
}
