<!DOCTYPE html>
<html lang="pt-br">


<?php
    include_once('backend/db.php');
    if (isset($_GET["readingsCount"])){
      $data = $_GET["readingsCount"];
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $readings_count = $_GET["readingsCount"];
    }
    // Definir valor padrao das ultimas leituras
    else {
      $readings_count = 20;
    }

    $last_reading = getLastReadings();
    $last_reading_temp = $last_reading["temper"];
    $last_reading_humi = $last_reading["humida"];
    $last_reading_press = $last_reading["press"];

    $last_reading_time = $last_reading["data_horario"];

?>

    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="../css/style_esp.css">
        <link rel="stylesheet" type="text/css" href="../css/style1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <header>
    <div style="display: flex; align-items: center;">
        <form method="get">
            <p> Insira quantas leituras deseja verificar</p>
            <input type="number" name="readingsCount" min="2" placeholder="Ultimas (<?php echo $readings_count; ?>) leituras ">
            <input type="submit" value="Atualizar">
        </form>
    </div>
    <div>
    
        <p id="ultima-leitura">Última Leitura: <?php echo date('d/m/Y H:i:s', strtotime($last_data_horario)); ?></p>

    </div>
</header>
<body>
    
<?php
        

    echo   '<h2> Visualizando as ' . $readings_count . ' leituras</h2>
            <table cellspacing="5" cellpadding="5" id="tableReadings">
                <tr>
                    <th>ID Leitura</th>
                    <th>Nome do Sensor</th>
                    <th>Localização</th>
                    <th>Temperatura</th>
                    <th>Humidade</th>
                    <th>Pressão</th>
                    <th>Data e Hora</th>
                </tr>';

    $result = getAllReadings($readings_count);
        if ($result) {
        while ($row = $result->fetch_assoc()) {
            $row_id = $row["id"];
            $row_sensor = $row["model_sensor"];
            $row_location = $row["localizacao"];
            $row_value1 = $row["temper"];
            $row_value2 = $row["humida"];
            $row_value3 = $row["press"];
            $row_data_horario = $row["data_horario"];
         
            echo '<tr>
                    <td>' . $row_id . '</td>
                    <td>' . $row_sensor . '</td>
                    <td>' . $row_location . '</td>
                    <td>' . $row_value1 . '</td>
                    <td>' . $row_value2 . '</td>
                    <td>' . $row_value3 . '</td>
                    <td>' . date('d/m/Y H:i:s', strtotime($row_data_horario)) . '</td>
                  </tr>';
        }
        echo '</table>';
        $result->free();
    }
?>


</body>
</html>
