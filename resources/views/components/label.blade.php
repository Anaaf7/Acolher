@props(['value', 'required' => false])

<label {!! $attributes->merge(['class' => 'block font-jaldi-bold text-azul-escuro mb-1 ml-1 text-lg']) !!}>
    @if($required)<span class="text-red-500 mr-0.5">*</span>@endif{{ $value ?? $slot }}
</label>