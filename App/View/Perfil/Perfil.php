<title><?= $titulo_view ?></title>
<br>
<div class="perfil">
    <div class="div1">
        <details>
            <summary>Minha Conta</summary>
            <ul>
                <a href="<?php echo url('perfil', 'index'); ?>">Perfil</a>
            </ul>
        </details>
        <details>
            <summary>Funçoes Sistema</summary>
            <ul>
                <a href="<?php echo url('perfil', 'index'); ?>?arq=Forneces">Consultar Fornecedores</a>
                <a href="<?php echo url('perfil', 'index'); ?>?arq=Prods">Consultar Produtos</a>
                <br>
                <?php if ($acesso == 1) { ?>
                    <a href="<?php echo url('perfil', 'index'); ?>?arq=Relatorios">Consultar Relatorios</a>
                    <br>
                    <a href="<?php echo url('perfil', 'index'); ?>?arq=FormFunc">Cadastro Funcionario</a>
                <?php } else {  ?>
                    <a href="<?php echo url('perfil', 'index'); ?>?arq=FormRela">Enviar Relatorio</a>
                <?php } ?>
                <br>
                <a href="<?php echo url('perfil', 'index'); ?>?arq=FormProd">Cadastro Produto</a>
                <a href="<?php echo url('perfil', 'index'); ?>?arq=FormForne">Cadastro Fornecedores</a>
            </ul>
        </details>

    </div>
    <?php if (empty($funcao)) { ?>
        <div class="div2">
            <h3>Perfil</h3>
            <form style="max-width: 400px; margin: auto;" action="/processar_perfil" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $model->Nome ?>">
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $model->Email ?>">
                <br><br>
                <input type="submit" value="Salvar Perfil">
            </form>
            <br>
            <hr style="max-width: 400px; margin: auto;">
            <br>
            <h3>Mudar de senha</h3>

            <form style="max-width: 400px; margin: auto;" action="/processar_perfil" method="post">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha">
                <br>
                <label for="nova_senha">Nova Senha:</label>
                <input type="password" id="nova_senha" name="nova_senha">
                <br><br>
                <input type="submit" value="Mudar Senha">
            </form>
        </div>
    <?php } else { ?>
        <div class="div2"><?= $funcao ?></div>
    <?php } ?>
</div>