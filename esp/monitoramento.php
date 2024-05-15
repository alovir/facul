
<?php
    include_once('../backend/db.php');
    if (isset($_GET["readingsCount"])){
      $data = $_GET["readingsCount"];
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $readings_count = $_GET["readingsCount"];
    }
    // default readings count set to 20
    else {
      $readings_count = 20;
    }

    $last_reading = getLastReadings();
    $last_reading_temp = $last_reading["temper"];
    $last_reading_humi = $last_reading["humida"];
    $last_reading_pres = $last_reading["press"];
    $last_data_horario = $last_reading["data_horario"];

    
    $min_temp = minReading($readings_count, 'temper');
    $max_temp = maxReading($readings_count, 'temper');
    $avg_temp = avgReading($readings_count, 'temper');

    $min_humi = minReading($readings_count, 'humida');
    $max_humi = maxReading($readings_count, 'humida');
    $avg_humi = avgReading($readings_count, 'humida');

    $min_pres = minReading($readings_count, 'press');
    $max_pres = maxReading($readings_count, 'press');
    $avg_pres = avgReading($readings_count, 'press');


?>

<!DOCTYPE html>

<html lang="pt-br">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="../css/style_esp.css">
        <link rel="stylesheet" type="text/css" href="../css/style_esp.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
   
<body>
    <p>Ultima Leitura: <?php echo $last_data_horario; ?></p>
    <section class="content">
	    <div class="box gauge--1">
	    <h3>TEMPERATURA</h3>
              <div class="mask">
			  <div class="semi-circle"></div>
			  <div class="semi-circle--mask"></div>
			</div>
		    <p style="font-size: 30px;" id="temp">--</p>
		    <table cellspacing="5" cellpadding="5">
		        <tr>
		            <th colspan="3">Temperatura <BR></BR> Ultimas <?php echo $readings_count; ?> Leituras</th>
	            </tr>
		        <tr>
		            <td>Min</td>
                    <td>Max</td>
                    <td>Media</td>
                </tr>
                <tr>
                    <td><?php echo $min_temp['min_amount']; ?> &deg;C</td>
                    <td><?php echo $max_temp['max_amount']; ?> &deg;C</td>
                    <td><?php echo round($avg_temp['avg_amount'], 2); ?> &deg;C</td>
                </tr>
            </table>
        </div>
        <div class="box gauge--2">
            <h3>HUMIDADE</h3>
            <div class="mask">
                <div class="semi-circle"></div>
                <div class="semi-circle--mask"></div>
            </div>
            <p style="font-size: 30px;" id="humi">--</p>
            <table cellspacing="5" cellpadding="5">
                <tr>
                    <th colspan="3">Humidade <BR></BR> Ultimas <?php echo $readings_count; ?> Leituras</th>
                </tr>
                <tr>
                    <td>Min</td>
                    <td>Max</td>
                    <td>Media</td>
                </tr>
                <tr>
                    <td><?php echo $min_humi['min_amount']; ?> %</td>
                    <td><?php echo $max_humi['max_amount']; ?> %</td>
                    <td><?php echo round($avg_humi['avg_amount'], 2); ?> %</td>
                </tr>
            </table>
        </div>
        <div class="box gauge--3">
            <h3>PRESSAO</h3>
            <div class="mask">
                <div class="semi-circle"></div>
                <div class="semi-circle--mask"></div>
            </div>
            <p style="font-size: 30px;" id="pres">--</p>
            <table cellspacing="5" cellpadding="5">
                <tr>
                    <th colspan="3">Pressão <BR></BR> Ultimas <?php echo $readings_count; ?> Leituras</th>
                </tr>
                <tr>
                    <td>Min</td>
                    <td>Max</td>
                    <td>Media</td>
                </tr>
                <tr>
                    <td><?php echo $min_pres['min_amount']; ?> Kpa</td>
                    <td><?php echo $max_pres['max_amount']; ?> kPa</td>
                    <td><?php echo round($avg_pres['avg_amount'], 2); ?> Kpa</td>
                </tr>
            </table>
        </div>
    </section>

  
<script>
    var temper = <?php echo $last_reading_temp; ?>;
    var humida = <?php echo $last_reading_humi; ?>;
    var press = <?php echo $last_reading_pres; ?>;
    setTemperature(temper);
    setHumidity(humida);
    setPressao(press);

    function setTemperature(curVal){
    	//Set range de temperatura em C°:
    	var minTemp = 15.0;
    	var maxTemp = 40.0;
        
    	var newVal = scaleValue(curVal, [minTemp, maxTemp], [0, 180]);
    	$('.gauge--1 .semi-circle--mask').attr({
    		style: '-webkit-transform: rotate(' + newVal + 'deg);' +
    		'-moz-transform: rotate(' + newVal + 'deg);' +
    		'transform: rotate(' + newVal + 'deg);'
    	});
    	$("#temp").text(curVal + ' ºC');
    }

    function setHumidity(curVal){
    	//Set range de humidade em %:
    	var minHumi = 0;
    	var maxHumi = 100;

    	var newVal = scaleValue(curVal, [minHumi, maxHumi], [0, 180]);
    	$('.gauge--2 .semi-circle--mask').attr({
    		style: '-webkit-transform: rotate(' + newVal + 'deg);' +
    		'-moz-transform: rotate(' + newVal + 'deg);' +
    		'transform: rotate(' + newVal + 'deg);'
    	});
    	$("#humi").text(curVal + ' %');
    }

    function setPressao(curVal){
    	//Set range de temperatura em Kpa:
    	var minPres = 780;
    	var maxPres = 1100;

    	var newVal = scaleValue(curVal, [minPres, maxPres], [0, 180]);
    	$('.gauge--3 .semi-circle--mask').attr({
    		style: '-webkit-transform: rotate(' + newVal + 'deg);' +
    		'-moz-transform: rotate(' + newVal + 'deg);' +
    		'transform: rotate(' + newVal + 'deg);'
    	});
    	$("#pres").text(curVal + ' kPa');
    }

    function scaleValue(value, from, to) {
        var scale = (to[1] - to[0]) / (from[1] - from[0]);
        var capped = Math.min(from[1], Math.max(from[0], value)) - from[0];
        return ~~(capped * scale + to[0]);
    }
</script>
</body>
</html>
