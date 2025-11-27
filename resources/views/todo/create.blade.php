<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="form bg-white p-6 border-1" action="{{ route('todo.store') }}" method="post">
                    @csrf
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <x-label for="nimi" value="{{ __('Nimi') }}" />
                        </div>   
                        <div class ="md:w-1/3">
                            <x-input id="nimi" class="block mt-1 w-full" type="text" name="nimi" value="" required autofocus />
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">

                        </div>
                        <div class="md:w-1/3">
                            <button type="submit" class="btn btn-success">Lisää uusi todo</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>