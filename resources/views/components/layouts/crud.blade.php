{{-- Necessário para quando o fundo precisar ser espelhado --}}
@props(['espelhar' => false]) 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acolher</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-jaldi">

    {{-- Fundo que leva o parâmetro de espelhamento --}}
    <div class="fixed inset-0 -z-10 bg-fundo-padrao bg-cover bg-center {{ $espelhar ? '-scale-x-100' : '' }}">
    </div>

    {{-- Header --}}
    <header class="relative z-10 flex justify-between items-center p-3">
        <img src="{{ asset('imagens/logo-sem-nome.png') }}" alt="Logo" class="h-10">
       
        <a href="/" class="flex items-center gap-2 bg-preto text-white px-5 py-2 rounded-full hover:bg-vermelho-escuro transition shadow-md">
            <i class="fa-solid fa-user fa-lg"></i>
            <span class="font-jaldi-bold">Entrar</span>
    </a>
    </header>

    {{-- Conteúdo --}}
    <main class="relative z-10 min-h-screen flex flex-col items-center justify-center p-4">
        {{ $slot }}
    </main>

</body>
</html>