<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    
                    @if (session('success'))
                        <p style="color:green;">{{ session('success') }}</p>
                    @endif

                    @can('create', App\Models\Produto::class)
                        <a href="{{ route('produtos.create') }}"> 
                            <x-primary-button>
                            Criar Produto
                            </x-primary-button> 
                        </a>
                    @endcan
                    

                    @foreach ( $produtos as $produto )
                        <p>Nome: {{ $produto->nome }}</p>
                        <a href="{{ route('produtos.show', $produto->id) }}">
                            <x-primary-button>
Mostrar Detalhes
                            </x-primary-button>
                            
                        </a>
                        <hr>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</x-app-layout>


