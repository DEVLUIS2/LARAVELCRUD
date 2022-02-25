<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Lista de Bebidas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b border-gray-200 ">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{route('Drink.store')}}" method="POST" class="text-center">
                        @csrf

                        <label for="" style="margin-right:180px ">Nome da Bebida:</label><br>
                        <input type="text" name="name" placeholder="..." style="text-transform: uppercase;margin-bottom: 10px;height: 40px;width: 300px"><br>

                        <label for="" style="margin-right:257px ">Preço:</label><br>
                        <input type="text" name="registro" placeholder="..." style="text-transform: uppercase; ;margin-bottom: 10px;height: 40px; width: 300px"><br>

                        <button type="submit" style="border:black 0.5px solid; background-color: royalblue;color:white;width: 200px;height: 40px">Cadastrar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>