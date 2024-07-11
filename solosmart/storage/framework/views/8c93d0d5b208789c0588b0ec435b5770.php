<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Cadastro</title>
    <link href="https://fonts.cdnfonts.com/css/fox-on-the-run" rel="stylesheet">
</head>
<body class="h-screen content-center items-center justify-items-center" style="background-color:#6D4C3D">
    <div class="content-center flex flex-col items-center justify-items-center w-full">
        <div class="container w-[25%] text-gary-950 font-semibold mx-8 flex flex-col justify-center items-center bg-[#F5F8DE] rounded-lg font-sans shadow-lg shadow-black">
            <div class="flex flex-col-1 space-x-2 text-[50px] mt-4 font-bold" style="font-family: 'Fox on the Run', sans-serif;">
                <p class="text-[#31E981]">
                    Solo
                </p>
                <p class="text-[#41337A]">
                    Smart
                </p>
            </div>
            <p class="text-[30px] mt-5 mb-5">
                Cadastro
            </p>
            <form action="" method="GET" class="flex flex-col justify-center items-center text-left w-[310px] text-sm">
                <label for="nome" class="w-full mb-2">Nome</label>
                <input type="text" id="nome" name="nome" class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <label for="email" class="w-full mb-2">E-mail</label>
                <input type="email" id="email" name="email" class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <label for="telefone" class="w-full mb-2">Telefone</label>
                <input type="tel" id="telefone" name="telefone" class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <label for="senha" class="w-full mb-2">Senha</label>
                <input type="password" id="senha" name="senha" class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <label for="csenha" class="w-full mb-2">Confirmar senha</label>
                <input type="password" id="csenha" name="csenha" class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <button class="bg-[#41337A] rounded-lg flex flex-col justify-center items-center w-[315px] h-[45px] mb-3 mt-7">
                    <input type="submit" value="Cadastrar" class="text-xl text-white cursor-pointer">
                </button>
                <p class="font-normal text-sm">
                    Já possuí uma conta?
                </p>
                <button class="mb-5">
                    <p class="text-sm">
                        Faça Login
                    </p>
                </button>
            </form>
        </div>
    </div>
</body>
</html><?php /**PATH /var/www/html/GitHub/projeto-final-PW2-solosmart/solosmart/resources/views/cadastro.blade.php ENDPATH**/ ?>