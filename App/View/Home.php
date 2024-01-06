<?php
     $id = $_SESSION['id'];
     $nome = $_SESSION['nome'];
     $email = $_SESSION['email'];
     $senha = $_SESSION['senha'];
     $acesso = $_SESSION['acesso'];

    ?>
<h2>Id: <?= $id; ?></h2>
<h2>Nome: <?= $nome ?></h2>
<h2>Email: <?= $email ?></h2>
<h2>Senha: <?= $senha ?></h2>
<h2>Acesso: <?= $acesso ?></h2>
