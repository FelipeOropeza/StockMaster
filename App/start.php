<?php

use App\Model\LoginModel;
use App\Services\Hash;

$modelLogin = new LoginModel();
$modelLogin->Id_Login;
$modelLogin->Nome = 'Admin';
$modelLogin->Email = 'Admin@gmail';
$modelLogin->Senha = Hash::criptografaPassword('admin12345');
$modelLogin->Acesso = 1;

$modelLogin->cadastroLogin();
