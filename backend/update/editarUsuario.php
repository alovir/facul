<?php
  include(dirname(__DIR__).'/db.php');

  $id = $_GET['id_usuario'];
  $nome = $_GET['nome'];
  $sobrenome = $_GET['sobrenome'];
  $cpf= $_GET['cpf'];
  $email= $_GET['email'];
  $senha= $_GET['senha'];
  $funcionario = $_GET['funcionario'];

  $sql = "UPDATE usuarios set 
    nome='$nome',
    sobrenome='$sobrenome',
    cpf='$cpf',  
    email='$email',
    senha='$senha',
    funcionario='$funcionario' 
    WHERE id_usuario='$id'";

  dbQuery($sql);

  if(isset($_GET['privilegio'])) $privilegio = $_GET['privilegio'];

  include(dirname(__DIR__).'/redirecionar.php');
?>
