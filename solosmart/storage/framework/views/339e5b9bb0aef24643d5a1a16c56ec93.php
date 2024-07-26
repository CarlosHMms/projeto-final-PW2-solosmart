<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Logar</title>
    <link href="https://fonts.cdnfonts.com/css/fox-on-the-run" rel="stylesheet">
</head>
<body class="h-screen content-center items-center justify-items-center" style="background-color:#6D4C3D">
    <div class="content-center flex flex-col items-center justify-items-center w-full">
        <div class="container md:w-[500px] md:h-full w-full h-screen text-gary-950 font-semibold md:mx-8 flex flex-col justify-center items-center bg-[#F5F8DE] md:rounded-lg font-sans shadow-lg shadow-black">
            <div class="flex flex-col-1 space-x-2 text-[30px] md:text-[50px] mt-4 font-bold" style="font-family: 'Fox on the Run', sans-serif;">
                <p class="text-[#31E981]">
                    Solo
                </p>
                <p class="text-[#41337A]">
                    Smart
                </p>
            </div>
            <p class="text-[20px] md:text-[30px] mt-5 mb-5">
                Login
            </p>
            <form method="POST" action="<?php echo e(route('login')); ?>" class="flex flex-col justify-center items-center text-left w-[310px] text-xs md:text-sm">
                <?php echo csrf_field(); ?>
                <label for="email" class="w-full mb-2">E-mail</label>
                <input type="email" id="email" name="email" required class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <label for="senha" class="w-full mb-2">Senha</label>
                <input type="password" id="senha" name="senha" required class="font-light rounded-lg mb-2 h-[30px] p-[5px] w-[315px] border-[1px] border-solid border-black">
                <div class="text-right w-full">
                    <button>
                        <p class="font-semibold text-xs">
                            Esqueceu a senha?
                        </p>
                    </button>
                </div>
                <button class="bg-[#41337A] rounded-lg flex flex-col justify-center items-center w-[315px] h-[45px] mb-3 mt-7">
                    <input type="submit" value="Entrar" class="text-lg md:text-xl text-white cursor-pointer">
                </button>
                <p class="font-normal text-xs md:text-sm">
                    Não possuí uma conta?
                </p>
                <button class="mb-5">
                    <p class="text-xs md:text-sm">
                        Cadastre-se
                    </p>
                </button>
            </form>
        </div>
    </div>
</body>
</html><?php /**PATH /var/www/html/GitHub/projeto-final-PW2-solosmart/solosmart/resources/views/login.blade.php ENDPATH**/ ?>