<title><?= $titulo_view ?></title>
<br>
<div class="perfil">
    <div class="div1">
        <?php if($acesso == 1) { ?>
        <a href="<?php echo url('perfil', 'index'); ?>?arq=Relatorios">Relatorios</a>
        <br>
        <a href="<?php echo url('perfil', 'index'); ?>?arq=FormFunc">Cadastro Funcionario</a>
        <?php } else {  ?>
        <p>Sem funçoes no momento</p>
        <?php } ?>
    </div>
    <?php if (empty($funcao)) { ?>
        <div class="div2"></div>
    <?php } else { ?>
        <div class="div2"><?= $funcao ?></div>
    <?php } ?>
</div>