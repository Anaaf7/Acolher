<x-layouts.crud :espelhar="false">
    <div class="w-full flex flex-col items-center lg:items-start lg:pl-32 px-6" 
         x-data="{ step: 1 }"> {{-- Gerenciador de Etapas --}}
        
        <h1 class="font-shantellSans-bold text-center lg:text-left w-full
        bg-linear-to-r from-azul-escuro to-azul-claro bg-clip-text text-transparent 
        text-5xl md:text-7xl lg:text-8xl mb-8 lg:mb-12 
        drop-shadow-[2px_2px_0px_rgba(0,0,0,0.1)] tracking-tight">
            Cadastre-se
        </h1>

        <form action="{{ route('cadastro.post') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-4xl relative z-10">
            @csrf

            <div x-show="step === 1" x-transition:enter.duration.500ms class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6">
                <div class="flex flex-col">
                    <x-label required>Nome completo</x-label>
                    <x-input type="text" id="nome" name="nome" placeholder="Fulano da Silva" required />
                </div>
                <div class="flex flex-col">
                    <x-label required>Telefone</x-label>
                    <x-input type="text" id="telefone" name="telefone" placeholder="(47) 9 0000-0000" required />
                </div>
                <div class="flex flex-col">
                    <x-label required>CPF/CNPJ</x-label>
                    <x-input type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="000.000.000-00" required />
                </div>
                <div class="flex flex-col">
                    <x-label required>Endereço</x-label>
                    <x-input type="text" id="endereco" name="endereco" placeholder="Digite seu CEP" required />
                </div>
                <div class="flex flex-col">
                    <x-label required>E-mail</x-label>
                    <x-input type="email" id="email" name="email" placeholder="Fulano@gmail.com" required />
                </div>
                <div class="flex flex-col">
                    <x-label required>Senha</x-label>
                    <x-input type="password" id="senha" name="senha" placeholder="***" required />
                </div>

                <div class="md:col-span-2 flex justify-end mt-4">
                    <x-button type="button" @click="step = 2">
                        Próxima etapa
                    </x-button>
                </div>
            </div>

            <div x-show="step === 2" x-transition:enter.duration.500ms class="flex flex-col gap-6" style="display: none;">
                
            <div class="flex flex-col" x-data="{ count: 0 }">
                <x-label>Redes sociais</x-label>
        
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="relative">
                        <x-input type="text" id="instagram" name="instagram" placeholder="@Instagram" class="w-full pr-10" />
                        <i class="fa-brands fa-instagram absolute right-4 top-1/2 -translate-y-1/2 text-azul-escuro"></i>
                    </div>
                    <div class="relative">
                        <x-input type="text" id="facebook" name="facebook" placeholder="@Facebook" class="w-full pr-10" />
                        <i class="fa-brands fa-facebook absolute right-4 top-1/2 -translate-y-1/2 text-azul-escuro"></i>
                    </div>
                </div>
                </div>

            <div class="flex flex-col" x-data="{ count: 0 }">
                    <x-label>Descrição do seu perfil</x-label>
                    <div class="relative">
                        <textarea id="descricao" name="descricao" maxlength="150" 
                            @input="count = $el.value.length" 
                            class="w-full bg-bege border-none rounded-xl p-4 h-32 resize-none shadow-inner 
                                focus:ring-2 focus:ring-white focus:outline-none transition-all"
                            placeholder="Descreva um pouco sobre seu propósito na plataforma..."></textarea>
                            
                        <span class="absolute bottom-2 right-4 text-xs text-gray-400 font-jaldi" 
                            x-text="count + '/150'"></span>
                    </div>
                </div>

                <div class="flex flex-col" x-data="{ fileName: '' }">
                <x-label required>Imagem de perfil</x-label>
                
                <label 
                    @dragover.prevent="" 
                    @drop.prevent="fileName = $event.dataTransfer.files[0].name; $refs.fileInput.files = $event.dataTransfer.files"
                    class="w-full bg-bege border-2 border-dashed border-gray-300 rounded-xl h-14 flex items-center justify-between px-6 cursor-pointer"
                >
                    {{-- O texto muda apenas se fileName tiver valor --}}
                    <span class="text-gray-400 font-jaldi truncate pr-4" 
                        x-text="fileName ? fileName : 'Clique aqui ou arraste uma imagem'">
                    </span>

                    <i class="fa-solid fa-upload text-azul-escuro"></i>

                    <input 
                        type="file" 
                        id="foto_perfil" 
                        name="foto_perfil" 
                        class="hidden" 
                        required
                        x-ref="fileInput"
                        @change="fileName = $event.target.files[0].name"
                        accept="image/*"
                    >
                </label>
            </div>

            <label class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative flex items-center">

                        <input type="checkbox" required name="termos" 
                            class="peer appearance-none w-6 h-6 bg-bege border-2 border-transparent rounded-lg shadow-inner 
                                checked:bg-vermelho-escuro checked:border-vermelho-escuro transition-all duration-300 cursor-pointer">
                        
                        <i class="fa-solid fa-check absolute text-white opacity-0 peer-checked:opacity-100 left-1.5 text-xs pointer-events-none transition-opacity"></i>
                    </div>
                    
                    <span class="text-sm text-gray-500 transition-colors">
                        Li e concordo com os <a href="#" class="underline font-jaldi-bold hover:text-preto">termos de uso</a>
                    </span>
                </label>

                <div class="flex flex-col md:flex-row justify-between items-center mt-6 gap-4">  
                
                <button type="button" @click="step = 1" class="text-gray-500 text-sm hover:text-azul-escuro">
                       <- Voltar para etapa anterior
                    </button>

                    <x-button type="submit">
                        Finalizar cadastro
                    </x-button>
                </div>
            </div>

        </form>
    </div>
</x-layouts.crud>