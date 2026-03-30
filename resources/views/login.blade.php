<x-layouts.crud :espelhar="true">
    <div class="grid grid-cols-1 lg:grid-cols-2 w-full max-w-7xl mx-auto">
        
        <div class="hidden lg:block"></div>

        <div class="flex flex-col items-center justify-center px-6">
            
            <div class="w-full max-w-md"> 
                
                <h1 class="font-shantellSans-bold text-center
                    bg-gradient-to-r from-azul-escuro to-azul-claro bg-clip-text text-transparent 
                    text-7xl lg:text-8xl mb-12 drop-shadow-[2px_2px_0px_rgba(0,0,0,0.1)] tracking-tight">
                    Entrar
                </h1>

                <form action="#" method="POST" class="flex flex-col gap-6">
                    @csrf
                    
                    <div class="flex flex-col">
                        <x-label class="text-azul-escuro font-bold ml-1">E-mail</x-label>
                        <x-input type="email" id="email" name="email" placeholder="Fulano@gmail.com" required />
                    </div>

                    <div class="flex flex-col" x-data="{ show: false }">
                        <x-label class="text-azul-escuro font-bold ml-1">Senha</x-label>
                        <div class="relative">
                           <x-input 
                                x-bind:type="show ? 'text' : 'password'"
                                id="senha" 
                                name="senha" 
                                placeholder="***" 
                                required />

                            <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-4 flex items-center text-azul-escuro opacity-50 hover:opacity-100">
                                <i class="fa-solid" :class="show ? 'fa-eye' : 'fa-eye-slash'"></i>
                            </button>
                        </div>
                        
                        <div class="flex justify-between items-center px-1">
                            <a href="#" class="text-sm text-gray-500 underline mt-2 hover:text-azul-escuro transition">
                                Esqueci minha senha
                            </a>
                            <a href="cadastro" class="text-sm text-gray-500 mt-2 hover:text-azul-escuro transition">
                                Não possui conta?
                            </a>
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <x-button>
                            Logar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.crud>