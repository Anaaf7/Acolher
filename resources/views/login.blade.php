<x-layouts.crud>

    <h1 class="font-shantellSans
    bg-linear-to-r from-azul-escuro to-azul-claro bg-clip-text text-transparent text-8xl font-bold mb-12 drop-shadow-[2px_2px_0px_rgba(0,0,0,0.1)] tracking-tight">
        Cadastre-se
    </h1>

    <form class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6 relative z-10">
        
        <div class="flex flex-col">
            <x-label required>Nome completo</x-label>
            <x-input type="text" id="nome" name="nome" placeholder="Fulano da Silva"></x-input>
        <span class="text-xs font-jaldi-bold text-red-500 mt-1 ml-2 block">
            erro
        </span>
        </div>

         <div class="flex flex-col">
            <x-label required>Telefone</x-label>
            <x-input type="text" id="telefone" name="telefone" placeholder="Fulano da Silva"></x-input>
        </div>

         <div class="flex flex-col">
            <x-label required>Nome completo</x-label>
            <x-input type="text" id="nome" name="nome" placeholder="Fulano da Silva"></x-input>
        </div>

         <div class="flex flex-col">
            <x-label required>Nome completo</x-label>
            <x-input type="text" id="nome" name="nome" placeholder="Fulano da Silva"></x-input>
        </div>

         <div class="flex flex-col">
            <x-label required>E-mail</x-label>
            <x-input type="gmail" id="email" name="email" placeholder="Fulano@gmail.com"></x-input>
        </div>

        <div class="flex flex-col">
            <label class="text-[#5B9BD5] font-bold mb-1 ml-1 flex items-center gap-1">
                <span class="text-red-500">*</span>Selecione o tipo de usuário
                
                <div x-data="{ show: false }" class="relative flex items-center">
                    <i class="fa-solid fa-circle-info cursor-help" 
                    style="color: rgb(80, 80, 80);"
                    @mouseenter="show = true" 
                    @mouseleave="show = false">
                    </i>

                    <div x-show="show" 
                        x-transition 
                        class="absolute bottom-full mb-2 left-1/2 -translate-x-1/2 w-48 p-2 bg-gray-800 text-white text-xs font-normal rounded-lg shadow-xl z-50 text-center"
                        style="display: none;">
                        Escolha a categoria que melhor define sua atuação no sistema.
                        <div class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-800"></div>
                    </div>
                </div>
            </label>
            <select id="tipo_usuario" name="tipo_usuario" class="bg-[#F9EBD7] border-none rounded-xl h-12 px-4 shadow-inner focus:ring-2 focus:ring-[#7FB3D5] text-gray-500 appearance-none">
                <option>Opções</option>
                 <option value="1">Instituição</option>
                  <option value="2">Pessoa física</option>
            </select>
        </div>

        <div class="md:col-span-2 flex justify-end mt-4">
            <x-button class="bg-[#A9CCE3] hover:bg-[#8eb6d1] text-white font-bold px-10 py-3 rounded-lg shadow-md transition-colors border-none capitalize normal-case">
                Próxima etapa
            </x-button>
        </div>
    </form>
</x-layout>