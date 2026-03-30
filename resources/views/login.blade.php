<x-layouts.crud>
 <div class="w-full flex flex-col items-center lg:items-start lg:pl-32 px-6">
        
        <h1 class="font-shantellSans-bold text-center lg:text-left w-full
        bg-linear-to-r from-azul-escuro to-azul-claro bg-clip-text text-transparent 
        text-5xl md:text-7xl lg:text-8xl mb-8 lg:mb-12 
        drop-shadow-[2px_2px_0px_rgba(0,0,0,0.1)] tracking-tight">
            Cadastre-se
        </h1>

        <form class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6 relative z-10">
            
            <div class="flex flex-col">
                <x-label required>Nome completo</x-label>
                <x-input type="text" id="nome" name="nome" placeholder="Fulano da Silva" required></x-input>
            </div>

             <div class="flex flex-col">
                <x-label required>Telefone</x-label>
                <x-input type="text" id="telefone" name="telefone" placeholder="(47) 9 0000-0000" required></x-input>
            </div>

             <div class="flex flex-col">
                <x-label required>CPF/CNPJ</x-label>
                <x-input type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="000.000.000-00" required></x-input>
            </div>

             <div class="flex flex-col">
                <x-label required>Endereço</x-label>
                <x-input type="text" id="endereco" name="endereco" placeholder="Digite seu CEP" required></x-input>
            </div>

             <div class="flex flex-col">
                <x-label required>E-mail</x-label>
                <x-input type="email" id="email" name="email" placeholder="Fulano@gmail.com" required></x-input>
            </div>

            <div class="flex flex-col">
                <label class="text-azul-escuro text-lg font-jaldi-bold mb-1 ml-1 flex items-center gap-1">
                    <span class="text-vermelho-escuro">*</span>Selecione o tipo de usuário
                    
                    <div x-data="{ show: false }" class="relative flex items-center">
                        <i class="fa-solid fa-circle-info cursor-pointer" 
                        style="color: rgb(80, 80, 80);"
                        @mouseenter="show = true" 
                        @mouseleave="show = false">
                        </i>

                        <div x-show="show" 
                            x-transition 
                            class="absolute bottom-full mb-2 left-1/2 -translate-x-1/2 w-64 p-3 bg-gray-800 text-white text-xs rounded-lg shadow-xl z-50 text-justify"
                            style="display: none;">
                            <b class="font-jaldi-bold">Instituição</b>: perfil indicado para ONGs, brechós, igrejas ou projetos sociais que desejam receber doações; <br><br>
                            <b class="font-jaldi-bold">Pessoa Física</b>: perfil indicado para quem deseja doar voluntariamente na plataforma.
                            <div class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-800"></div>
                        </div>
                    </div>
                </label>

                <div class="relative w-full">
                    <select id="tipo_usuario" name="tipo_usuario" required 
                        class="w-full bg-[#F9EBD7] border-none rounded-xl h-12 px-4 shadow-inner focus:ring-2 focus:ring-[#7FB3D5] text-gray-500 appearance-none cursor-pointer pr-10">
                        <option value="" disabled selected>Opções</option>
                        <option value="1">Instituição</option>
                        <option value="2">Pessoa física</option>
                    </select>

                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                        <i class="fa-solid fa-angle-down text-gray-500"></i>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 flex justify-end mt-4">
                <x-button>
                    Próxima etapa
                </x-button>
            </div>
        </form>
    </div>
</x-layouts.crud>