<h2>Cadastro de Funcionario</h2>
<br>
<form style="max-width: 400px; margin: auto;" action="<?php echo url('perfil', 'index/save'); ?>?arq=FormFunc" method="post">
  <div class="mb-3">
    <label for="Nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="Senha" class="form-label">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>