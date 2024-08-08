<!DOCTYPE HTML>
<html>

<head>
  <title>SOLOSMART DATABASE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    html {
      font-family: Arial;
      display: inline-block;
      text-align: center;
    }

    p {
      font-size: 1.2rem;
    }

    h4 {
      font-size: 0.8rem;
    }

    body {
      margin: 0;
    }

    .topnav {
      overflow: hidden;
      background-color: green;
      color: white;
      font-size: 1.2rem;
    }


    .styled-table {
      border-collapse: collapse;
      margin-left: auto;
      margin-right: auto;
      font-size: 0.9em;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
      border-radius: 0.5em;
      overflow: hidden;
      width: 90%;
    }

    .styled-table thead tr {
      background-color: gray;
      color: #ffffff;
      text-align: left;
    }

    .styled-table th {
      padding: 12px 15px;
      text-align: left;
    }

    .styled-table td {
      padding: 12px 15px;
      text-align: left;
    }

    .styled-table tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
    }

    .styled-table tbody tr.active-row {
      font-weight: bold;
      color: green;
    }

    .bdr {
      border-right: 1px solid #e3e3e3;
      border-left: 1px solid #e3e3e3;
    }

    td:hover {
      background-color: rgba(80, 242, 148, 0.21);
    }

    tr:hover {
      background-color: rgba(80, 242, 148, 0.15);
    }

    .styled-table tbody tr:nth-of-type(even):hover {
      background-color: rgba(80, 242, 148, 0.15);
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
    .button.disabled {
      color: #fff;
      background-color: #a0a0a0;
      cursor: not-allowed;
      pointer-events: none;
    }
  </style>
</head>

<body>
  <div class="topnav">
    <h3>SOLOSMART DATABASE</h3>
  </div>

  <br>

  <h3 style="color: green;">TABELA DE GRAVAÇÃO - ESP32_01 </h3>

  <table class="styled-table" id="table_id">
    <thead>
      <tr>
        <th>Nº</th>
        <th>ID</th>
        <th>PLACA</th>
        <th>TEMPERATURA (°C)</th>
        <th>HUMIDADE (%)</th>
        <th>STATUS DE LEITURA SENSOR DHT11</th>
        <th>LED 01</th>
        <th>LED 02</th>
        <th>HORA</th>
        <th>DATA (dd-mm-yyyy)</th>
      </tr>
    </thead>
    <tbody id="tbody_table_record">
      <?php
      include 'database.php';
      $num = 0;

      $pdo = Database::connect();

      $sql = 'SELECT * FROM esp32_table_dht11_leds_record ORDER BY date, time';
      $num = 0;

      foreach ($pdo->query($sql) as $row) {
        $date = date_create($row['date']);
        $dateFormat = date_format($date, "d-m-Y");
        $num++;
        $led01 = isset($row['LED_01']) ? htmlspecialchars($row['LED_01']) : 'OFF';
        $led02 = isset($row['LED_02']) ? htmlspecialchars($row['LED_02']) : 'OFF';

        echo '<tr>';
        echo '<td>' . $num . '</td>';
        echo '<td class="bdr">' . htmlspecialchars($row['id']) . '</td>';
        echo '<td class="bdr">' . htmlspecialchars($row['board']) . '</td>';
        echo '<td class="bdr">' . htmlspecialchars($row['temperature']) . '</td>';
        echo '<td class="bdr">' . htmlspecialchars($row['humidity']) . '</td>';
        echo '<td class="bdr">' . htmlspecialchars($row['status_read_sensor_dht11']) . '</td>';
        echo '<td class="bdr">' . $led01 . '</td>';
        echo '<td class="bdr">' . $led02 . '</td>';
        echo '<td class="bdr">' . htmlspecialchars($row['time']) . '</td>';
        echo '<td>' . $dateFormat . '</td>';
        echo '</tr>';
      }
      Database::disconnect();

      ?>
    </tbody>
  </table>

  <br>

  <div class="btn-group">
    <button class="button" id="btn_prev" onclick="prevPage()">Anterior</button>
    <button class="button" id="btn_next" onclick="nextPage()">Próxima</button>
    <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;;">
      <p style="position:relative; font-size: 14px;"> Tabela: <span id="page"></span></p>
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

  <script>

    var current_page = 1;
    var records_per_page = 10;
    var l = document.getElementById("table_id").rows.length

    function apply_Number_of_Rows() {
      var x = document.getElementById("number_of_rows").value;
      records_per_page = x;
      changePage(current_page);
    }

    function prevPage() {
      if (current_page > 1) {
        current_page--;
        changePage(current_page);
      }
    }

    function nextPage() {
      if (current_page < numPages()) {
        current_page++;
        changePage(current_page);
      }
    }

    function changePage(page) {
      var btn_next = document.getElementById("btn_next");
      var btn_prev = document.getElementById("btn_prev");
      var listing_table = document.getElementById("table_id");
      var page_span = document.getElementById("page");


      if (page < 1) page = 1;
      if (page > numPages()) page = numPages();

      [...listing_table.getElementsByTagName('tr')].forEach((tr) => {
        tr.style.display = 'none';
      });
      listing_table.rows[0].style.display = "";

      for (var i = (page - 1) * records_per_page + 1; i < (page * records_per_page) + 1; i++) {
        if (listing_table.rows[i]) {
          listing_table.rows[i].style.display = ""
        } else {
          continue;
        }
      }

      page_span.innerHTML = page + "/" + numPages() + " (Número de Gravações = " + (l - 1) + ") | Número de Linhas: ";

      if (page == 0 && numPages() == 0) {
        btn_prev.disabled = true;
        btn_next.disabled = true;
        return;
      }

      if (page == 1) {
        btn_prev.disabled = true;
      } else {
        btn_prev.disabled = false;
      }

      if (page == numPages()) {
        btn_next.disabled = true;
      } else {
        btn_next.disabled = false;
      }
    }

    function numPages() {
      return Math.ceil((l - 1) / records_per_page);
    }

    window.onload = function () {
      var x = document.getElementById("number_of_rows").value;
      records_per_page = x;
      changePage(current_page);
    };
  </script>
</body>

</html>