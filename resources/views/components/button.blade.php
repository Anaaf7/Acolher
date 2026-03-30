<button 
    {!! $attributes->merge([
        'type' => 'submit', 
        'class' => 'inline-flex items-center justify-center bg-azul-escuro hover:bg-vermelho-escuro text-white font-jaldi-bold px-7 py-2 rounded-lg shadow-md transition-all active:scale-95 border-none cursor-pointer'
    ]) !!}
>
    {{ $slot }}
</button>