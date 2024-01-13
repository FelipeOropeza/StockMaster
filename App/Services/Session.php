<?php

namespace App\Services;

class Session
{

    public static function criarSession($dadosLogin)
    {
        session_start();
        $_SESSION['id'] = $dadosLogin->Id_Login;
        $_SESSION['nome'] = $dadosLogin->Nome;
        $_SESSION['email'] = $dadosLogin->Email;
        $_SESSION['senha'] = $dadosLogin->Senha;
        $_SESSION['acesso'] = $dadosLogin->Acesso;
    }

    public static function start()
    {
        session_start();
    }
    public static function destroy()
    {
        session_start();
        session_destroy();
    }
}
