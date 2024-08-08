<!DOCTYPE HTML>
<html>

<head>
  <title>ESP32 DHT11 DATABASE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="icon" href="data:,">
</head>

<body>
  <div class="topnav">
    <h3>ESP32 DHT11 DATABASE</h3>
  </div>

  <br>

  <div class="content">
    <div class="cards">

      <div class="card">
        <div class="card header">
          <h3 style="font-size: 1rem;">MONITORAMENTO</h3>
        </div>

        <h4 class="temperatureColor"><i class="fas fa-thermometer-half"></i> TEMPERATURA</h4>
        <p class="temperatureColor"><span class="reading"><span id="ESP32_01_Temp"></span> &deg;C</span></p>
        <h4 class="humidityColor"><i class="fas fa-tint"></i> UMIDIDADE</h4>
        <p class="humidityColor"><span class="reading"><span id="ESP32_01_Humd"></span> &percnt;</span></p>

        <p class="statusreadColor"><span>Status de Leitura Sensor DHT11 : </span><span
            id="ESP32_01_Status_Read_DHT11"></span></p>
      </div>

      <div class="card">
        <div class="card header">
          <h3 style="font-size: 1rem;">CONTROLE</h3>
        </div>

        <h4 class="LEDColor"><i class="fas fa-lightbulb"></i> LED 1</h4>
        <label class="switch">
          <input type="checkbox" id="ESP32_01_TogLED_01" onclick="GetTogBtnLEDState('ESP32_01_TogLED_01')">
          <div class="sliderTS"></div>
        </label>
        <h4 class="LEDColor"><i class="fas fa-lightbulb"></i> LED 2</h4>
        <label class="switch">
          <input type="checkbox" id="ESP32_01_TogLED_02" onclick="GetTogBtnLEDState('ESP32_01_TogLED_02')">
          <div class="sliderTS"></div>
        </label>
      </div>

    </div>
  </div>

  <br>

  <div class="content">
    <div class="cards">
      <div class="card header" style="border-radius: 15px;">
        <h3 style="font-size: 0.7rem;">ÚLTIMO DADO COLETADO DO ESP32 [ <span id="ESP32_01_LTRD"></span> ]</h3>
        <button class="evokeTable"><a href="{{route('tables')}}">Abrir Tabela de Gravação</a></button>
        <h3 style="font-size: 0.7rem;"></h3>
      </div>
    </div>
  </div>

<script src="{{ asset('js/home.js') }}"></script>

</body>

</html>