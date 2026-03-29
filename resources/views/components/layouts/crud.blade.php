<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acolher</title>

     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-fundo-padrao min-h-screen font-jaldi">

{{-- Header --}}
<header class="flex justify-between items-center p-3">
   <img src="{{asset('imagens/logo-sem-nome.png') }}" alt="Logo do projeto Acolher" class="h-10">

    <a href="" class="flex items-center gap-2 bg-preto text-white px-5 py-2 rounded-full hover:bg-vermelho-escuro transition shadow-md">
            <i class="fa-solid fa-user fa-lg"></i>
            <span class="font-jaldi-bold">Entrar</span>
    </a>
</header>


   {{-- Conteúdo da página --}}
    <main class="bg-fundo-padrao min-h-screen relative overflow-hidden flex flex-col items-center justify-center p-4 font-jaldi">
        {{ $slot }}
    </main>
</body>
</html>