<?php
  include_once 'db.php';

  $email = $_POST["email"];  
  $senha = $_POST["senha"]; 

  $sql = "SELECT * FROM usuarios WHERE email = '$email'";
  $result = dbQuery($sql);
  $usuario = dbFetchAssoc($result);

  if( $usuario['senha'] !== $senha ) {
    echo 'Usuário ou senha não conferem!';
    die();
  };

  if( $usuario['administrador'] === "1" ){
    header('location: /tcc/gerAnalis.php');
    die();
  }else if( $usuario['funcionario'] === "1"){
    /* Faz a leitura do privilégio e o direciona */
    header('location: /tcc/gerUsu.php?privilegio=funcionario&nome_usuario='.
    $usuario['nome']);
    die();
  }else {
    header('location: /tcc/areaDoUsu.php?nome_usuario='.
    $usuario["nome"].'&id_usuario='.$usuario['id_usuario'] );
    die();
  }
?>
