<?php

namespace App\Controller;

class RelatorioController extends Controller
{
    public static function enviar()
    {
        echo 'relatorio';
        var_dump($_GET);
        var_dump($_POST);
    }
}