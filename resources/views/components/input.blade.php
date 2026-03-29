@props(['disabled' => false, 'name' => ''])



<div>
    <input 
        {{ $disabled ? 'disabled' : '' }} 
        name="{{ $name }}"
        {!! $attributes->merge([
            'class' => 'w-full border-none rounded-xl h-12 px-4 shadow-inner outline-none transition-all ' . 
            ($errors->has($name) ? 'bg-vermelho-escuro ring-2 ring-vermelho-escuro' : 'bg-bege focus:ring-vermelho-escuro')
        ]) !!}
    >

    @error($name)
        <span class="text-xs font-jaldi-bold text-vermelho-escuro mt-1 ml-2 block">
            {{ $message }}
        </span>
    @enderror
</div>

