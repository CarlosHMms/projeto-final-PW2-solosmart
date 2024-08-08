<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.cdnfonts.com/css/fox-on-the-run" rel="stylesheet">
    <script src="{{ asset('js/perfil.js') }}"></script>
    <title>Perfil</title>
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
<body class="content-center items-center justify-items-center" style="background-color:#F5F8DE">
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
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group group-hover:border">
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
    <div class="content-center flex flex-col items-center justify-items-center w-full">
        <div class="w-full h-[70px] bg-[#6D4C3D] flex items-center">
            <span class="ml-4 cursor-pointer">
                <svg class="h-10 w-10 fill-[#ffff]" id="btnAbrir" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <title>bars</title>
                    <path d="M2 9.249h28c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0h-28c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0zM30 14.75h-28c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h28c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0zM30 22.75h-28c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h28c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0z"></path>
                </svg>
            </span>
            <div class="flex-grow flex justify-center">
                <a href="#">
                    <img class="h-[65px] w-[80px]" src="{{ asset('img/logo.png') }}" alt="Logo">
                </a>
            </div>
        </div>
        <section class="w-full overflow-hidden dark:bg-gray-900">
            <div class="flex flex-col">
                <!-- Cover Image -->
                <img src="{{ asset('img/fundo.jpg') }}" alt="User Cover"
                        class="w-full xl:h-[20rem] lg:h-[18rem] md:h-[16rem] sm:h-[14rem] xs:h-[11rem]" />

                <!-- Profile Image -->
                <div class="sm:w-[80%] xs:w-[90%] mx-auto flex">
                    <img src="{{ asset('img/profile.png') }}" alt="User Profile"
                            class="rounded-md lg:w-[12rem] lg:h-[12rem] md:w-[10rem] md:h-[10rem] sm:w-[8rem] sm:h-[8rem] xs:w-[7rem] xs:h-[7rem] outline outline-2 outline-offset-2 outline-[#41337A] relative lg:bottom-[5rem] sm:bottom-[4rem] xs:bottom-[3rem]" />

                    <!-- FullName -->
                    <h1
                        class="w-full text-left my-4 sm:mx-4 xs:pl-4 text-gray-800 dark:text-white lg:text-4xl md:text-3xl sm:text-3xl xs:text-xl font-serif">
                        Nome do Usuário</h1>

                </div>

                <div
                    class="xl:w-[80%] lg:w-[90%] md:w-[90%] sm:w-[92%] xs:w-[90%] mx-auto flex flex-col gap-4 items-center relative lg:-top-8 md:-top-6 sm:-top-4 xs:-top-4">
                    <!-- Description -->
                    <p class="w-fit text-gray-700 dark:text-gray-400 text-md">Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit. Quisquam debitis labore consectetur voluptatibus mollitia dolorem
                        veniam omnis ut quibusdam minima sapiente repellendus asperiores explicabo, eligendi odit, dolore
                        similique fugiat dolor, doloremque eveniet. Odit, consequatur. Ratione voluptate exercitationem hic
                        eligendi vitae animi nam in, est earum culpa illum aliquam.</p>


                    <!-- Detail -->
                    <div class="w-full my-auto py-6 flex flex-col justify-center gap-2">
                        <div class="w-full flex sm:flex-row xs:flex-col gap-2 justify-center">
                            <div class="w-full">
                                <dl class="text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                    <div class="flex flex-col pb-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nome</dt>
                                        <dd class="text-lg font-semibold">Orlando </dd>
                                    </div>
                                    <div class="flex flex-col py-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Sobrenome</dt>
                                        <dd class="text-lg font-semibold">Filho</dd>
                                    </div>
                                    <div class="flex flex-col py-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Data de Nascimento</dt>
                                        <dd class="text-lg font-semibold">21/02/1997</dd>
                                    </div>
                                    <div class="flex flex-col py-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Genêro</dt>
                                        <dd class="text-lg font-semibold">genero</dd>
                                    </div>
                                </dl>
                            </div>
                            <div class="w-full">
                                <dl class="text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                    <div class="flex flex-col pb-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Localização</dt>
                                        <dd class="text-lg font-semibold">Brasil, sei lá</dd>
                                    </div>

                                    <div class="flex flex-col pt-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Número de Telefone</dt>
                                        <dd class="text-lg font-semibold">+55 62991711387</dd>
                                    </div>
                                    <div class="flex flex-col pt-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email</dt>
                                        <dd class="text-lg font-semibold">exemplo@gmail.com</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
</body>
</html>