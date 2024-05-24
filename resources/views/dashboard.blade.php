<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm">
                <div class="flex px-10 bg-high-purplle">
                    <div class="mr-9 bg-white p-6 text-black w-1/2">
                        
                        <div class="flex items-center">
                            <!-- circuloPerfil -->
                            <div class="w-12 h-12 bg-orange rounded-full"></div> 

                            <div class="ml-1">
                                {{ Auth::user()->name }}
                            </div>
                        </div>

                        <div class="overflow-auto">
                            <p>Modelo TCP/IP e tipos de rede</p>
                            <p class="text-orange">#TI #redesdecomputadores</p>
                        </div>

                    </div>

                    <div class=" bg-white p-6 text-black w-1/2">
                        
                        <div class="flex items-center">
                            <!-- circuloPerfil -->
                            <div class="w-12 h-12 bg-orange rounded-full"></div> 

                            <div class="ml-1">
                                {{ Auth::user()->name }}
                            </div>
                        </div>

                        <div class="overflow-auto">
                            <p>Modelo TCP/IP e tipos de rede</p>
                            <p class="text-orange">#TI #redesdecomputadores</p>
                        </div>

                    </div>


            </div>
        </div>
    </div>
</x-app-layout>
