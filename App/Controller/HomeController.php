<?php

namespace App\Controller;

class HomeController extends Controller
{
    public static function index()
    {   
        session_start();
        if (empty($_SESSION['id'])) {
            header('Location: /StockMaster/App/');
        }

        parent::reader('Home');
    }
}