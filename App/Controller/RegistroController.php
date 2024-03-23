<?php 

namespace App\Controller;

use App\Services\Session;

class RegistroController extends Controller
{
    public static function index()
    {   
        Session::start();
        parent::authentic();

        parent::reader('Registro/Registro', 0, null);
    }
}