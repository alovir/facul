<!DOCTYPE html>
<html lang="pt-br">
    <center><h3>Fazendo Logoff</h3></center>
    <meta http-equiv="refresh" content="2; URL='index.php'" />
    <br><br>
    <!-- Final da conexao banco de dados-->
    <?php if (isset ($con)) { mysqli_close($con); } ?>
</html>