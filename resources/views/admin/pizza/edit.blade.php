<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Editar Pizza') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{ route('Pizza.update',$pizza->id)}}" method="POST" class="text-center">
                        @csrf
                        @method('PUT')

                        <label for="" style="margin-right:190px ">Nome da Pizza:</label><br>
                        <input type="text" value="{{$pizza->name}}" name="name" placeholder="Nome da Pizza" style="text-transform: uppercase;margin-bottom: 10px;height: 40px;width: 300px"><br>

                        <label for="" style="margin-right:255px ">Preço:</label><br>
                        <input type="text" name="registro" value="{{$pizza->registro}}" placeholder="Preço" style="text-transform: uppercase;margin-bottom: 10px;height: 40px;width: 300px"><br>

                        <button type="submit" style="border:black 0.5px solid; background-color: royalblue;color:white;width: 200px;height: 40px">Atualizar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>