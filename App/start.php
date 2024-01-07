<?php
use App\Model\LoginModel;
use App\Services\Hash;

$model = new LoginModel();
$model->Id_Login;
$model->Nome = 'Admin';
$model->Email = 'Admin@gmail';
$model->Senha = Hash::criptografaPassword('admin12345');
$model->Acesso = 1;

$model->cadastroLogin();
