<!--Arquivo de configuração---->
<?php
  include_once('../backend/db.php');

  // A chave abaixo deve ser identica ao que esta instalado no microcontrolador. Se não estiver, não tera acesso ao banco.

  $api_key_value = "uqDIL2kHJQHmvnuBiVPlz9zWkt8aDg8N";

  $api_key= $model_sensor = $localizacao = $temper = $humida = $press = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
      $model_sensor = test_input($_POST["model_sensor"]);
      $localizacao = test_input($_POST["localizacao"]);
      $temper = test_input($_POST["temper"]);
      $humida = test_input($_POST["humida"]);
      $press = test_input($_POST["press"]);

      $result = insertReading($model_sensor, $localizacao, $temper, $humida, $press);
      echo $result;
    }
    else {
      echo "Chave de acesso, errada.";
    }
  }
  else {
    echo "Nenhum dado postado.";
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
