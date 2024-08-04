<!DOCTYPE HTML>
<html>

<head>
  <title>ESP32 DHT11 DATABASE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .topnav {
      overflow: hidden;
      background-color: green;
      color: white;
      padding: 10px 0;
      text-align: center;
    }

    h3 {
      margin: 0;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    table,
    th,
    td {
      border: 1px solid #ddd;
    }

    th,
    td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .button {
      padding: 10px 15px;
      font-size: 14px;
      margin: 0 5px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
    }

    .button:hover {
      background-color: #ddd;
    }

    .btn-group {
      text-align: center;
      margin: 20px 0;
    }

    .styled-table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    .styled-table thead {
      background-color: green;
      color: white;
    }

    .styled-table th,
    .styled-table td {
      padding: 12px;
      text-align: left;
    }

    .styled-table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .btn-group .button {
        background-color: green;
        border: 1px solid #e3e3e3;
        color: white;
        padding: 5px 8px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        cursor: pointer;
        float: center;
      }

      .btn-group .button:not(:last-child) {
        border-right: none; 
      }

      .btn-group .button:hover {
        background-color: darkgreen;
      }

      .btn-group .button:active {
        background-color: green;
        transform: translateY(1px);
      }

      .btn-group .button:disabled,
      .button.disabled{
        color:#fff;
        background-color: #a0a0a0; 
        cursor: not-allowed;
        pointer-events:none;
      }
  </style>
</head>

<body>
  <div class="topnav">
    <h3>ESP32 DHT11 DATABASE</h3>
  </div>

  <br>

  <h3 style="color: green; text-align: center;">ESP32_01 TABELA DE GRAVAÇÃO DE DADOS</h3>

  <table class="styled-table" id="table_id">
    <thead>
      <tr>
        <th>Nº</th>
        <th>ID</th>
        <th>USER ID</th>
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
      require_once 'database.php';

      try {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM esp32_table_dht11_leds_record ORDER BY date, time';
        $stmt = $pdo->query($sql);
        $num = 0;

        foreach ($stmt as $row) {
          $date = date_create($row['date']);
          $dateFormat = date_format($date, "d-m-Y");
          $num++;
          echo '<tr>';
          echo '<td>' . htmlspecialchars($num) . '</td>';
          echo '<td class="bdr">' . htmlspecialchars($row['id']) . '</td>';
          echo '<td class="bdr">' . htmlspecialchars($row['user_id']) . '</td>';
          echo '<td class="bdr">' . htmlspecialchars($row['board']) . '</td>';
          echo '<td class="bdr">' . htmlspecialchars($row['temperature']) . '</td>';
          echo '<td class="bdr">' . htmlspecialchars($row['humidity']) . '</td>';
          echo '<td class="bdr">' . htmlspecialchars($row['status_read_sensor_dht11']) . '</td>';
          echo '<td class="bdr">' . htmlspecialchars(isset($row['LED_01']) ? $row['LED_01'] : 'N/A') . '</td>';
          echo '<td class="bdr">' . htmlspecialchars(isset($row['LED_02']) ? $row['LED_02'] : 'N/A') . '</td>';
          echo '<td class="bdr">' . htmlspecialchars($row['time']) . '</td>';
          echo '<td>' . htmlspecialchars($dateFormat) . '</td>';
          echo '</tr>';
        }
      } catch (PDOException $e) {
        echo '<tr><td colspan="11">Erro ao conectar ao banco de dados: ' . htmlspecialchars($e->getMessage()) . '</td></tr>';
      }

      Database::disconnect();
      ?>
    </tbody>
  </table>

  <br>

  <div class="btn-group">
    <button class="button" id="btn_prev" onclick="prevPage()">ANTERIOR</button>
    <button class="button" id="btn_next" onclick="nextPage()">PRÓXIMO</button>
    <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;">
      <p style="position:relative; font-size: 14px;">Tabela : <span id="page"></span></p>
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

  <script src="script_recordtable.js"></script>
</body>

</html>