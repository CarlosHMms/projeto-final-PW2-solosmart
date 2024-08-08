<!DOCTYPE HTML>
<html>

<head>
  <title>ESP32 DHT11 DATABASE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="icon" href="data:,">
  @vite('resources/css/app.css')
  <style>
        #btnFechar {
            transition: transform 0.3s ease;
        }
        #menu.fechar {
                transform: translateX(-100%);
        }
        #menu.Abrir {
            transform: translateX(100%);
        }
    </style>
</head>
<body style="background-color:#F5F8DE">
    <aside id="menu" class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-[#6D4C3D] transition duration-300 md:w-4/12 lg:ml-0 lg:w-[250px] xl:w-[250px] 2xl:w-[250px]">
          <div>
              <span class="absolute right-0 cursor-pointer">
                  <svg class="h-6 w-6 fill-[#ffff] mr-4 mt-2" id="btnFechar" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 47.971 47.971" xml:space="preserve">
                      <g>
                        <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                      c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                      C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                      s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                      </g>
                  </svg>
              </span>
              <div class="-mx-6 px-6 py-4">
                  <a href="{{ route('home')}}" title="home">
                  <img src="{{ asset('img/logo.png') }}" class="w-40" alt="POC WCS">
                  </a>
              </div>
              <ul class="space-y-2 tracking-wide mt-8">
                  <li class="group">
                  <a href="{{ route('home')}}" aria-label="dashboard" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group group-hover:border">
                      <svg class="h-6 w-6 fill-white group-hover:fill-slate-300" viewBox="-1.5 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
                      <path d="M14.993 7.61a.554.554 0 0 1-.756.207L7.98 4.255 1.764 7.817a.554.554 0 0 1-.55-.962l1.192-.683v-2.48a.476.476 0 0 1 .475-.474h1.222a.476.476 0 0 1 .475.475v1.234l3.126-1.79a.554.554 0 0 1 .55-.001l6.531 3.718a.554.554 0 0 1 .208.756zm-1.399.937v6.198a.476.476 0 0 1-.475.475H2.881a.476.476 0 0 1-.475-.475v-6.2L7.98 5.353zm-6.782 1.01H4.578v2.262h2.234zm4.61 0H9.188v2.262h2.234z"/>
                      </svg>
                      <span class="group-hover:text-slate-300">Inicio</span>
                  </a>
                  </li>
                  <li class="group">
                  <a href="{{ route('perfil')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group group-hover:border">
                      <svg class="h-6 w-6 fill-white group-hover:fill-slate-300" viewBox="-3 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
                      <path d="M12.517 12.834v1.9a1.27 1.27 0 0 1-1.267 1.267h-9.5a1.27 1.27 0 0 1-1.267-1.267v-1.9A3.176 3.176 0 0 1 3.65 9.667h5.7a3.176 3.176 0 0 1 3.167 3.167zM3.264 5.48A3.236 3.236 0 1 1 6.5 8.717a3.236 3.236 0 0 1-3.236-3.236z"/>
                      </svg>
                      <span class="group-hover:text-slate-300">Perfil</span>
                  </a>
                  </li>
                  <li class="group">
                  <a href="{{route('tables')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group group-hover:border">
                      <svg class="h-6 w-6 fill-white group-hover:fill-slate-300" viewBox="-3.5 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
                      <path d="M10.05 3.828a1.112 1.112 0 0 1 1.11 1.108v10.562a1.112 1.112 0 0 1-1.11 1.108h-8.1a1.112 1.112 0 0 1-1.11-1.108V4.936a1.112 1.112 0 0 1 1.11-1.108h.415v1.108h-.414l-.002.002v10.558l.002.002h8.098l.002-.002V4.938l-.002-.002h-.414V3.828h.416zm-.98 4.076H2.82v1.108h6.25zm0 2.337H2.82v1.108h6.25zm0 2.337H2.82v1.108h6.25zm-.543-8.935v1.25a.476.476 0 0 1-.475.476H3.948a.476.476 0 0 1-.475-.475v-1.25a.476.476 0 0 1 .475-.476h.697V1.87a.476.476 0 0 1 .475-.475h1.76a.476.476 0 0 1 .475.475v1.3h.697a.476.476 0 0 1 .475.474zM6.55 2.67a.554.554 0 1 0-.554.554.554.554 0 0 0 .554-.554z"/>
                      </svg>
                      <span class="group-hover:text-slate-300">Relatórios</span>
                  </a>
                  </li>
                  <li class="group">
                  <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group group-hover:border">
                      <svg class="h-6 w-6 fill-white group-hover:fill-slate-300" viewBox="-1.7 0 20.4 20.4" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
                      <path d="M16.416 10.283A7.917 7.917 0 1 1 8.5 2.366a7.916 7.916 0 0 1 7.916 7.917zm-2.958.01a.792.792 0 0 0-.792-.792H9.284V6.12a.792.792 0 1 0-1.583 0V9.5H4.32a.792.792 0 0 0 0 1.584H7.7v3.382a.792.792 0 0 0 1.583 0v-3.382h3.382a.792.792 0 0 0 .792-.791z"/>
                      </svg>
                      <span class="group-hover:text-slate-300">Central</span>
                  </a>
                  </li>
                  <li class="group">
                  <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group group-hover:border">
                      <svg class="h-6 w-6 fill-white group-hover:fill-slate-300" viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
                      <path d="M16.014 8.86v1.44a.587.587 0 0 1-.468.556l-1.182.204a.463.463 0 0 1-.114.006 5.902 5.902 0 0 1-.634 1.528.455.455 0 0 1 .078.084l.691.98a.586.586 0 0 1-.062.725l-1.02 1.02a.586.586 0 0 1-.724.061l-.98-.69a.444.444 0 0 1-.085-.078 5.908 5.908 0 0 1-1.544.637.502.502 0 0 1 0 .175l-.182 1.053a.667.667 0 0 1-.633.532h-1.31a.667.667 0 0 1-.633-.532l-.182-1.053a.495.495 0 0 1 0-.175 5.908 5.908 0 0 1-1.544-.637.444.444 0 0 1-.085.077l-.98.691a.586.586 0 0 1-.725-.062l-1.02-1.02a.586.586 0 0 1-.061-.723l.691-.98a.454.454 0 0 1 .077-.085 5.901 5.901 0 0 1-.633-1.528.466.466 0 0 1-.114-.006l-1.182-.204a.586.586 0 0 1-.468-.556V8.86a.586.586 0 0 1 .468-.556L2.636 8.1a.437.437 0 0 1 .114-.005 5.912 5.912 0 0 1 .633-1.528.466.466 0 0 1-.077-.085l-.691-.98a.587.587 0 0 1 .061-.724l1.02-1.02a.587.587 0 0 1 .725-.062l.98.691a.444.444 0 0 1 .085.078 5.903 5.903 0 0 1 1.528-.634.433.433 0 0 1 .005-.114l.204-1.182a.586.586 0 0 1 .556-.468h1.442a.586.586 0 0 1 .556.468l.204 1.182a.448.448 0 0 1 .005.114 5.908 5.908 0 0 1 1.528.634.444.444 0 0 1 .085-.078l.98-.691a.586.586 0 0 1 .724.062l1.02 1.02a.586.586 0 0 1 .062.724l-.691.98a.467.467 0 0 1-.078.085 5.902 5.902 0 0 1 .634 1.528.434.434 0 0 1 .114.005l1.182.204a.587.587 0 0 1 .468.556zm-4.955.72a2.559 2.559 0 1 0-2.56 2.56 2.559 2.559 0 0 0 2.56-2.56z"/>
                      </svg>
                      <span class="group-hover:text-slate-300">Configurações</span>
                  </a>
                  </li>
              </ul>
          </div>
  
          <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
              <a href="{{ route('login')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group">
                  <svg class="h-6 w-6 group-hover:text-slate-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  
                  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />  
                  <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                  </svg>
                  <span class="group-hover:text-slate-300">Sair</span>
              </a>
          </div>
      </aside>
    <div class="w-full h-[70px] bg-[#6D4C3D] flex items-center">
      <span class="ml-4 cursor-pointer">
          <svg class="h-10 w-10 fill-[#ffff]" id="btnAbrir" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <title>bars</title>
              <path d="M2 9.249h28c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0h-28c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0zM30 14.75h-28c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h28c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0zM30 22.75h-28c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h28c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0z"></path>
          </svg>
      </span>
      <div class="flex-grow flex justify-center">
          <a href="{{ route('home')}}">
              <img class="h-[65px] w-[80px] mt-[5px] mb-[10px]" src="{{ asset('img/logo.png') }}" alt="Logo">
          </a>
      </div>
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
        <h3 style="font-size: 0.7rem; margin-top: 5px;">ÚLTIMO DADO COLETADO DO ESP32 [ <span id="ESP32_01_LTRD"></span> ]</h3>
        <button class="evokeTable"><a href="{{route('tables')}}">Abrir Tabela de Gravação</a></button>
        <h3 style="font-size: 0.7rem;"></h3>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/script_recordtable.js') }}"></script>
  <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('btnFechar').addEventListener('click', function() {
                document.getElementById('menu').classList.toggle('fechar');
                document.getElementById('btnFechar').classList.toggle('btn');
            });
            document.getElementById('btnAbrir').addEventListener('click', function() {
                document.getElementById('menu').classList.toggle('fechar');
            });
            const btnFechar = document.getElementById('btnFechar');
            const btnAbrir = document.getElementById('btnAbrir');

            btnfechar.cli
            btnAbrir.cli
        });
  </script>
  <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>