<?php

namespace App\Services;

class Hash
{
    public static function criptografaPassword($senha)
    {
        $passCrypt = password_hash($senha, PASSWORD_BCRYPT);
    
        return $passCrypt;
    }

    public static function verificaPassword($senha, $passCrypt) 
    {
        return password_verify($senha, $passCrypt);
    }
}