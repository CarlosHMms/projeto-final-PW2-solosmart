<!DOCTYPE HTML>
<html>

<head>
  <title>SoloSmart - DATABASE</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <div class="topnav">
    <h3>SoloSmart - DATABASE</h3>
  </div>

  <br>

  <h3 style="color: green;">ESP32_01 TABELA DE GRAVAÇÃO DE DADOS</h3>

  <table class="styled-table" id="table_id">
    <thead>
      <tr>
        <th>Nº</th>
        <th>ID</th>
        <th>PLACA</th>
        <th>TEMPERATURA (°C)</th>
        <th>UMIDIDADE (%)</th>
        <th>STATUS DE LEITURA SENSOR DHT11</th>
        <th>LED 01</th>
        <th>LED 02</th>
        <th>TEMPO</th>
        <th>DATA (dd-mm-yyyy)</th>
      </tr>
    </thead>
    <tbody id="tbody_table_record">
      <?php
      include 'database.php';
      $num = 0;
      $pdo = Database::connect();
      $sql = 'SELECT * FROM esp32_table_dht11_leds_record ORDER BY date, time';
      foreach ($pdo->query($sql) as $row) {
        $date = date_create($row['date']);
        $dateFormat = date_format($date, "d-m-Y");
        $num++;
        echo '<tr>';
        echo '<td>' . $num . '</td>';
        echo '<td class="bdr">' . $row['id'] . '</td>';
        echo '<td class="bdr">' . $row['board'] . '</td>';
        echo '<td class="bdr">' . $row['temperature'] . '</td>';
        echo '<td class="bdr">' . $row['humidity'] . '</td>';
        echo '<td class="bdr">' . $row['status_read_sensor_dht11'] . '</td>';
        echo '<td class="bdr">' . $row['LED_01'] . '</td>';
        echo '<td class="bdr">' . $row['LED_02'] . '</td>';
        echo '<td class="bdr">' . $row['time'] . '</td>';
        echo '<td>' . $dateFormat . '</td>';
        echo '</tr>';
      }
      Database::disconnect();
      //------------------------------------------------------------
      ?>
    </tbody>
  </table>

  <br>

  <div class="btn-group">
    <button class="button" id="btn_prev" onclick="prevPage()">ANTERIOR</button>
    <button class="button" id="btn_next" onclick="nextPage()">PRÓXIMO</button>
    <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;;">
      <p style="position:relative; font-size: 14px;"> Tabela : <span id="page"></span></p>
    </div>
    <select name="number_of_rows" id="number_of_rows">
      <option value="10">10</option>
      <option value="25">25</option>
      <option value="50">50</option>
      <option value="100">100</option>
    </select>
    <button class="button" id="btn_apply" onclick="apply_Number_of_Rows()">Aplicar</button>
  </div>

  <br>

  <script src="js/script_recordtable.js"></script>
</body>

</html>