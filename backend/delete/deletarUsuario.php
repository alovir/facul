<?php
  include(dirname(__DIR__).'/db.php');

  $id = $_GET['id_usuario'];
  $sql = "DELETE FROM usuarios WHERE id_usuario=$id" ;

  dbQuery($sql);

  if(isset($_GET['privilegio'])) $privilegio = $_GET['privilegio'];

  include(dirname(__DIR__).'/redirecionar.php');
?>
