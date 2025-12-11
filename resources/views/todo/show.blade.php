<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="md:flex md:items-center m-2">
                    <div class="md:w-1/3">
                        <x-label for="nimi" value="{{ __('Nimi') }}" />
                    </div>
                    <div class="md:w-1/3">
                        <div class="block mt-1 w-full border rounded-md shadow-sm p-2">
                            {{ $todo->nimi }}
                        </div>    
                    </div>
                </div>

                <div class="md:flex md:items-center m-2">
                    <div class="md:w-1/3">
                        <x-label for="tehtavan_kuvaus" value="{{ __('Tehtävän kuvaus') }}" />
                    </div>
                    <div class="md:w-1/3">
                        <div class="block mt-1 w-full border rounded-md shadow-sm p-2">
                            {{ $todo->tehtavan_kuvaus }}
                        </div>
                    </div>
                </div>

                <div class="md:flex md:items-center m-2">
                    <div class="md:w-1/3">
                        <x-label for="status" value="{{ __('Status') }}" />
                    </div>
                    <div class="md:w-1/3">
                        <div class="block mt-1 w-full border rounded-md shadow-sm p-2">
                            {{ $todo->status }}
                        </div>
                    </div>
                </div>

                    <div class="md:flex md:items-center m-2">
                            <div class="md:w-1/3">
                                <x-label for="maarapaiva" value="{{ __('Maarapaiva') }}" />
                            </div>
                            <div class="md:w-1/3">
                                <div class="block mt-1 w-full border rounded-md shadow-sm p-2 ">
                                {{ $todo->maarapaiva }}
                            </div>
                        </div>
                    </div>


                    <div class="md:flex md:items-center m-2">
                    <div class="md:w-1/3">
                        <x-label for="kiireellisyys" value="{{ __('Kiireellisyys') }}" />
                    </div>
                    <div class="md:w-1/3">
                        <div class="block mt-1 w-full border rounded-md shadow-sm p-2">
                            {{ $todo->kiireellisyys }}
                        </div>
                    </div>
                </div>

                <button type="button" onclick="history.back()" class="bg-red-500 p-2 rounded m-2 text-white rounded hover:bg-red-300"> Takaisin </button>
                
            </div>
        </div>
    </div>
</x-app-layout>

/*

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <table>
                    <thead>
                        <tr>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $todo->id }}</td>
                            <td>{{ $todo->nimi }}</td>
                            <td>{{ $todo->kuvaus }}</td>
                            <td>{{ $todo->status }}</td>
                            <td>{{ $todo->maarapaiva }}</td>
                            <td>{{ $todo->kiireellisyys }}</td>
                        </tr>
                        
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</x-app-layout>

*/