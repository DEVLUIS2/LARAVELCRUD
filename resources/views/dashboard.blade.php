<x-app-layout >
    <x-slot name="header" >
        <h2 class="font-arial text-xl text-red-800 leading-tight text-center">
            {{ __('Olá, o que deseja fazer hoje ?') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-yellow-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-red-700 text-white border-b border-gray-200">
                   Para inserir, selecione uma das opções apresentadas no menu.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
