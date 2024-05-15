
<?php require_once 'parts/header.php';?>

<section class="cadastro-section">
  <form action="backend/create/cadastrarUsuario.php" id="formCadastroUsuario" method="POST" onsubmit="return validateCadastroUserForm()"  autocomplete="off">

    <div class="titulo"><h2>Cadastro</h2></div>
    <hr>

    <div class="mb-3">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>

    <div class="mb-3">
      <label for="sobrenome">Sobrenome:</label>
      <input type="text" class="form-control" id="sobrenome" name="sobrenome">
    </div>

    <div class="mb-3">
      <label for="cpf">CPF:</label>
      <input type="text" class="form-control" id="cpf" name="cpf" 
	maxlength="14"	 onkeypress="formatCpf(event)"
</div>

    <div class="mb-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" autocomplete="off"  placeholder="seu email" >
    </div>

    <div class="mb-3">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" name="senha" 
autocomplete="off">
    </div>

    <div class="login-buttons">
      <input id="btn-cadastrar" name="Submit" type="submit" value="Cadastrar" class="btn"></input>
      <a class="btn" href="login.php">Login</a>
    </div>
  </form>
</section>


