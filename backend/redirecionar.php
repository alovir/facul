<?php 
if($privilegio == 'funcionario') {
  header("location: /tcc/gerUsu.php");
  die();
} else if($privilegio == 'usuario') {
  header("location: /tcc/areaDoUsu.php");
  die();
} else {
  header("location: /tcc/gerAnalis.php");
  die();
}

?>
