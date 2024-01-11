<?php

if (!function_exists('url')) {

  function url($controller, $view = null)
  {
    $base_url = 'http://localhost/StockMaster/App/';
    if (empty($view)) {
      $url = $base_url . $controller;
    } else {
      $url = $base_url . $controller . '/' . $view;
    }
    return $url;
  }
}

function validaFunc($acesso) {
  if($acesso == 0){
    header('Location: /StockMaster/App/perfil/index');
  }
}