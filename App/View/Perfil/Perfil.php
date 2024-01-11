<title><?= $titulo_view ?></title>
<br>
<div class="perfil">
    <div class="div1">
        <a href="<?php echo url('perfil', 'perfil'); ?>?arq=Relatorios">Relatorios</a>
        <br>
        <a href="<?php echo url('perfil', 'perfil'); ?>?arq=FormFunc">Cadastro Funcionario</a>
    </div>
    <?php if (empty($funcao)) { ?>
        <div class="div2"></div>
    <?php } else { ?>
        <div class="div2"><?= $funcao ?></div>
    <?php } ?>
</div>