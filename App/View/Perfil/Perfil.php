<title><?= $titulo_view ?></title>
<br>
<div class="perfil">
    <div class="div1">
        <a href="<?php echo url('perfil', 'index'); ?>?arq=Fornece">Consultar Fornecedores</a>
        <br>
        <?php if($acesso == 1) { ?>
        <a href="<?php echo url('perfil', 'index'); ?>?arq=Relatorios">Consultar Relatorios</a>
        <br>
        <a href="<?php echo url('perfil', 'index'); ?>?arq=FormFunc">Cadastro Funcionario</a>
        <?php } else {  ?>
            <a href="<?php echo url('perfil', 'index'); ?>?arq=FormRela">Enviar Relatorio</a>
        <?php } ?>
        <br>
        <a href="<?php echo url('perfil', 'index'); ?>?arq=FormFone">Cadastro Fornecedores</a>
    </div>
    <?php if (empty($funcao)) { ?>
        <div class="div2"></div>
    <?php } else { ?>
        <div class="div2"><?= $funcao ?></div>
    <?php } ?>
</div>