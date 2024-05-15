<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php 

include_once './parts/header.php';

?>
</head>
<body>
    <main>
    
    <!--- MENU SUPERIOR --->
   <div>
    <?php 
        include './parts/menu.html'
    ?>
</div>
    <!---FIM MENU SUPERIOR --->

    <!---CONTEUDO --->
    <section class="login-section">
  <form action="backend/login.php" method="POST" >

    <div class="titulo"><h2>Login</h2></div>
    <hr>
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email">

    <label for="senha">Senha:</label>
    <input type="password" class="form-control" id="senha" name="senha">

    <div class="login-buttons">
      <button type="submit" id="btn-login" class="btn">Entrar</button>
      <a class="btn" href="cadUser.php">Cadastre-se</a>
    <div>
  </form>
</section>
    <!---FIM DO CONTEUDO --->

    <!---INICIO DO RODAPE --->
    <?php 
    include "./parts/footer.php";
    ?>
    <!---FIM DO RODAPE --->
    </main>
</body>
</html>