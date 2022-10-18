<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 style="margin-bottom: 3em">Usuarios:</h1>

                    @foreach($usuarios as $usuario)
    
                    <div class="card col-sm">
                        <div class="card-body">
                            <h2 class="card-title">Usuario: {{$usuario->name}}</h2>
                            <h5>Email: {{$usuario->email}}</h5>
                            <hr style="margin-bottom: 1em">
                        </div>
                    </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
