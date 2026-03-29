<button 
    {!! $attributes->merge([
        'type' => 'submit', 
        'class' => 'inline-flex items-center justify-center bg-[#A9CCE3] hover:bg-[#8eb6d1] text-white font-bold px-10 py-3 rounded-lg shadow-md transition-all active:scale-95 border-none cursor-pointer'
    ]) !!}
>
    {{ $slot }}
</button>