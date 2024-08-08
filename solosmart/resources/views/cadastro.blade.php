<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Cadastro</title>
    <link href="https://fonts.cdnfonts.com/css/fox-on-the-run" rel="stylesheet">
</head>
<body class="h-screen content-center items-center justify-items-center" style="background-color:#6D4C3D">
    <!--Thiagão dps estiliza essa caixa aqui-->
    @if (session('success'))
        <div class="w-full flex justify-center" id="mensagemSucesso">
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 justify-center md:w-[500px] w-full absolute" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ session('success')}}</span>
                </div>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="w-full flex justify-center" id="mensagemErro">
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 justify-center md:w-[500px] w-full absolute" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ session('error')}}</span>
                </div>
            </div>
        </div>
    @endif
    @if (session('errorEmailAlready'))
        <div class="w-full flex justify-center" id="mensagemErro">
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 justify-center md:w-[500px] w-full absolute" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ session('errorEmailAlready')}}</span>
                </div>
            </div>
        </div>
    @endif
    
    <div class="content-center flex flex-col items-center justify-items-center w-full">
        <div class="container md:w-[500px] md:h-full w-full h-screen text-gary-950 font-semibold mx-8 flex flex-col justify-center items-center bg-[#F5F8DE] md:rounded-lg font-sans shadow-lg shadow-black">
            <div class="flex flex-col-1 space-x-2 text-[30px] md:text-[50px] mt-4 font-bold" style="font-family: 'Fox on the Run', sans-serif;">
                <p class="text-[#31E981]">
                    Solo
                </p>
                <p class="text-[#41337A]">
                    Smart
                </p>
            </div>
            <p class="text-[20px] md:text-[30px] mt-5 mb-5">
                Cadastro
            </p>
            <form action="/cadastro" method="POST" class="flex flex-col justify-center items-center text-left w-[310px] text-xs md:text-sm">
                @csrf
                <label for="nome" class="w-full mb-2">Nome</label>
                <input type="text" id="nome" name="nome" required class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <label for="email" class="w-full mb-2">E-mail</label>
                <input type="email" id="email" name="email" required class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <!--<label for="telefone" class="w-full mb-2">Telefone</label>
                <input type="tel" id="telefone" name="telefone" required class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
-->
                <label for="senha" class="w-full mb-2">Senha</label>
                <input type="password" id="senha" name="senha" required class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <label for="csenha" class="w-full mb-2">Confirmar senha</label>
                <input type="password" id="csenha" name="csenha" required class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <button class="bg-[#41337A] rounded-lg flex flex-col justify-center items-center w-[315px] h-[45px] mb-3 mt-7">
                    <input type="submit" value="Cadastrar" class="text-lg md:text-xl text-white cursor-pointer">
                </button>
                <p class="font-normal text-xs md:text-sm">
                    Já possuí uma conta?
                </p>
                <a href="{{ route('login')}}" class="text-xs md:text-sm mb-5">Faça Login</a>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function (){
            const mensagemSucesso = document.getElementById('mensagemSucesso');
            const mensagemErro = document.getElementById('mensagemErro');

        if (mensagemSucesso) {
            setTimeout(function() {
                mensagemSucesso.style.display = 'none';
            }, 3000);
        }

        if (mensagemErro) {
            setTimeout(function(){
                mensagemErro.style.display = 'none';
            }, 3000);
        }
        } );
    </script>
</body>
</html>