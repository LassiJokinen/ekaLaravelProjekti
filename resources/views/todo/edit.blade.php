<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="form bg-white p-6 border-1" action="{{ route('todo.update', [$todo->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <x-label for="nimi" value="{{ __('Nimi') }}" />
                        </div>   
                        <div class ="md:w-1/3">
                            <x-input id="nimi" class="block mt-1 w-full" type="text" name="nimi" value="{{ $todo->nimi }}" required autofocus />
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <x-label for="tehtavan_kuvaus" value="{{ __('Tehtävän kuvaus') }}" />
                        </div>
                        <div class="md:w-1/3">
                            <x-input id="tehtavan_kuvaus" class="block mt-1 w-full" type="text" name="tehtavan_kuvaus" value="{{ $todo->tehtavan_kuvaus }}" required autofocus />
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <x-label for="status" value="{{ __('Status') }}" />
                        </div>
                        <div class="md:w-1/3">
                            <select id="status" class="block mt-1 w-full" name="status" value="{{ $todo->status }}" required autofocus>
                                <option value="idea" {{ $todo->status=="idea"?"selected":""}}>Idea</option>
                                <option value="toteutetaan" {{ $todo->status=="toteutetaan"?"selected":""}}>Toteutetaan</option>
                                <option value="aloitettu" {{ $todo->status=="aloitettu"?"selected":""}}>Aloitettu</option>
                                <option value="tehty 50%" {{ $todo->status=="tehty 50%"?"selected":""}}>Tehty 50%</option>
                                <option value="tehty 70%" {{ $todo->status=="tehty 70%"?"selected":""}}>tehty 70%</option>
                                <option value="valmis" {{ $todo->status=="valmis"?"selected":""}}>Valmis</option>
                                <option value="hylätään ehdotus" {{ $todo->status=="tehty 70%"?"selected":""}}>Hylätään ehdotus</option>
                                <option value="tehdään seuraavaan versioon" {{ $todo->status=="tehdään seuraavaan versioon"?"selected":""}}>Tehdään seuraavaan versioon</option>
                            </select>
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <x-label for="maarapaiva" value="{{ __('Maarapaiva') }}" />
                        </div>
                        <div class="md:w-1/3">
                            <input id="maarapaiva"
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="date" name="maarapaiva" value="{{ $todo->maarapaiva}}" required autofocus />
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <x-label for="kiireellisyys" value="{{ __('Kiireellisyys') }}" />
                        </div>
                        <div class="md:w-1/3">
                            <select id="kiireellisyys" class="block mt-1 w-full" type="text" name="kiireellisyys" value="{{ $todo->kiireellisyys}}" required autofocus>
                                <option value="ei kiirettä" {{ $todo->kiireellisyys=="ei kiirettä"?"selected":""}}>Ei kiirettä</option>
                                <option value="heti" {{ $todo->kiireellisyys=="heti"?"selected":""}}>Heti</option>
                                <option value="eilen" {{ $todo->kiireellisyys=="eilen"?"selected":""}}>Eilen</option>
                            </select>
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">

                        </div>
                        <div class="md:w-1/3">
                            <button type="submit" class=" p-2 rounded bg-blue-400 text-white rounded hover:bg-blue-200">Päivitä</button>
                        </div>
                    </div>

                    <button type="button" onclick="history.back()" class="bg-red-500 p-2 rounded m-2 text-white rounded hover:bg-red-300"> Takaisin </button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>