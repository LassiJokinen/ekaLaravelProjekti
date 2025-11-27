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