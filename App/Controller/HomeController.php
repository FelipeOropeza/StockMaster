<?php

namespace App\Controller;

use App\Services\Session;

class HomeController extends Controller
{
    public static function index()
    {   
        Session::start();
        if (empty($_SESSION['id'])) {
            header('Location: /StockMaster/App/');
        }

        parent::reader('Home');
    }
}