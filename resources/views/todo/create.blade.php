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
                            <x-label for="tehtavan_kuvaus" value="{{ __('Tehtavan kuvaus') }}" />
                        </div>   
                        <div class ="md:w-1/3">
                            <x-input id="tehtavan_kuvaus" class="block mt-1 w-full" type="text" name="tehtavan_kuvaus" value="" required autofocus />
                        </div>
                    </div>


                    
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <x-label for="status" value="{{ __('Status') }}" />
                        </div>   
                        <div class ="md:w-1/3">
                            <select id="status" name="status" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                <option value="idea">Idea</option>
                                <option value="toteutetaan">Toteutetaan</option>
                                <option value="aloitettu">Aloitettu</option>
                                <option value="tehty 50%">Tehty 50%</option>
                                <option value="tehty 70%">Tehty 70%</option>
                                <option value="valmis">Valmis</option>
                                <option value="hylätään ehdotus">Hylätään ehdotus</option>
                                <option value="tehdään seuraavaan versioon">Tehdään seuraavaan versioon</option>
                            </select>
                        </div>
                    </div>



                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <x-label for="maarapaiva" value="{{ __('Maarapaiva') }}" />
                        </div>   
                        <div class ="md:w-1/3">
                            <x-input id="maarapaiva" class="block mt-1 w-full" type="date" name="maarapaiva" value="" required autofocus />
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <x-label for="kiireellisyys" value="{{ __('Kiireellisyys') }}" />
                        </div>   
                        <div class ="md:w-1/3">
                            <select id="kiireellisyys" name="kiireellisyys" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                <option value="ei kiirettä">Ei kiirettä</option>
                                <option value="heti">Heti</option>
                                <option value="eilen">Eilen</option>
                            </select>
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