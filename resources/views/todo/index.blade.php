<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h2 class="mb-2 ml-2">Järjestelmässä olevat todo-merkinnät</h2>
                <a href="{{ route('todo.create') }}" class="m-1 p-1 bg-blue-400 text-white rounded hover:bg-blue-200">Uusi todo</a>
                <table class="bg-gray-100 ml-3">
                    <thead>
                        <tr class="border-2 border-red-600">
                            <td>Komennot</td>
                            <td>nimi</td>
                            <td>Päivämäärä</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($todos as $todo)
                        <tr>
                            <td>
                                <a href="{{ route('todo.show', [$todo->id]) }}" style="display: inline-block;"><img src="icon/showButton.png" alt="Katso" style="width: 20px; height: auto"></a>
                                <a href="{{ route('todo.edit', [$todo->id]) }}" style="display: inline-block; margin-left: 5px;"><img src="icon/editButton.png" alt="Tallenna muutokset" width='20'></a>
                                
                                <form action="{{ route('todo.destroy', [$todo->id]) }}" method="post" 
                                    style="display: inline-block; margin-left: 10px;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                    onClick="return confirm('Haluatko varmasti poistaa?')">
                                        <img src="icon/deleteButton.webp" alt="Poista" width='20'>
                                    </button>
                                </form>

                            </td>
                            <td> 
                                {{ $todo->id}}
                            </td>
                            <td>
                                {{ $todo->nimi}}
                            </td>
                            <td>
                                {{ Carbon\Carbon::parse($todo->created_at)->format('d.m.Y') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</x-app-layout>