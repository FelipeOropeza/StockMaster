<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link href="http://localhost/StockMaster/App/css/style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="http://localhost/StockMaster/App/img/stock.png" type="image/png">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">StockMaster</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo url('home', 'index') ?>">Home</a>
          </li>
        </ul>
        <form class="d-flex">
          <ul class="navbar-nav me-auto mb-3 mb-lg-0">
            <?php
            if ($_SESSION['acesso'] == 0) {
            ?>
              <li class="nav-item dropdown">
                <a id="alinhamento" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                  </svg> &nbsp;<?php echo $_SESSION['nome'] ?>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo url('perfil', 'index') ?>">Perfil</a></li>
                  <li><a class="dropdown-item" href="<?php echo url('login', 'logout') ?>">Sair</a></li>
                </ul>
              </li>
          </ul>
        <?php } else { ?>
          <li class="nav-item dropdown">
            <a id="alinhamento" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
              Administrador
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo url('perfil', 'index') ?>">Perfil</a></li>
              <li><a class="dropdown-item" href="<?php echo url('login', 'logout') ?>">Sair</a></li>
            </ul>
          </li>
        <?php } ?>
        </form>
      </div>
    </div>
  </nav>