<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link href="https://fonts.cdnfonts.com/css/fox-on-the-run" rel="stylesheet">
    <title>Perfil</title>
</head>
<body class="h-screen content-center items-center justify-items-center" style="background-color:#F5F8DE">
    <div class="content-center flex flex-col items-center justify-items-center w-full">
        <div class="container w-[40%] text-gary-950 font-semibold mx-8 flex flex-col justify-center items-center bg-[#F5F8DE] rounded-lg font-sans shadow-lg shadow-black">
            <div class="mt-5 w-full">
                <svg fill="#000000" height="20px" width="20px" class="right-0" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    viewBox="0 0 47.971 47.971" xml:space="preserve">
                    <g>
                        <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                            c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                            C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                            s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                    </g>
                </svg>
            </div>
            <div>
                <figure>
                    <img src="profile.png" alt="">
                </figure>
            </div>
            <div class="mb-5 mt-5">
                <p class="text-[35px]">
                    Nome do Usuário
                </p>
            </div>
            <div class="w-full text-left ml-7">
                <div class="font-light mb-5">
                    <p class="text-[20px] font-semibold">
                        Informações de contato
                    </p>
                    <p>
                        E-mail:
                    </p>
                    <p>
                        Telefone:
                    </p>
                </div>
                <div class="font-light mb-5">
                    <p class="text-[20px] font-semibold">
                        Segunrança
                    </p>
                    <p>
                        Senha:
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH /var/www/html/GitHub/projeto-final-PW2-solosmart/solosmart/resources/views/perfil.blade.php ENDPATH**/ ?>