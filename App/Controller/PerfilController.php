<?php

namespace App\Controller;

use App\Model\RelatorioModel;
use App\Services\Session;

class PerfilController extends Controller
{
    
    public static function perfil()
    {
        Session::start();
        parent::authentic();
        
        if(empty($_GET['arq'])){
            parent::reader('Perfil/Perfil', 0);
        } else{
            $model = new RelatorioModel();
            $model->listaRela();
            $funcao = parent::funcoes('Perfil/' . $_GET['arq'], $model);
            parent::reader('Perfil/Perfil', 0, null, ['funcao' => $funcao]);
        }

    }
}