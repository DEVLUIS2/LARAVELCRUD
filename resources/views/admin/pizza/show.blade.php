<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Lista de Pizzas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <div class="text-center ">

                        <a href="{{route('Pizza.create')}}" style="padding:10px 50px 10px 50px;;color: white;border: 0.5px solid black;background-color: royalblue;">Cadastrar</a>

                    </div>
                    
                    <ul>
                        @foreach ($pizza as $pizza)

                            <li class="flex justify-content-end" style="margin-top: 20px;margin-bottom: 20px; justify-content: center">

                                <a href="{{ route('Pizza.edit',$pizza->id) }}" style="text-transform: uppercase;margin-top: 5px; width: 500px">{{$pizza->name}}  -  Preço: R${{$pizza->registro}},00</a>

                                <form action="{{route('Pizza.destroy',$pizza->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" style="padding: 5px;color: white;border: 0.5px solid black;background-color: rgba(255, 1, 1, 0.986);height: 33px;width: 100px;">Deletar</button>
                                </form>
                            </li>
                        @endforeach
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>