<x-app-layout>
    <div class="py-12 text-white min-h-screen mt-20 mb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-4 md:mb-0 mx-10 md:mx-20 md:text-4xl text-3xl md:flex md:w-1/3">
                <h1>Poste Seus Conteúdos</h1>
            </div>

            <div class="md:flex bg-high-purplle shadow-sm mx-10 md:mx-0 flex-col md:flex-row items-center">
                
                <div class="flex justify-center items-center rounded-extra-lg md:flex bg-purplle p-20 md:mx-20 md:my-10 text-black md:w-1/3 md:mb-3 ">
                    <a href="">
                        <button class="md:m-20 m-10 rounded-r-full">
                            <img class="w-10 h-10" src="{{ asset('imagens/mais.png') }}" alt="Post">
                        </button>
                    </a>
                </div>

                <div class="flex flex-col md:w-2/3 md:my-5rem">
                    <div>
                        <input class="bg-purplle border-none rounded-xl placeholder-basic-gray mt-5 h-5rem w-full focus:ring-0" type="text" placeholder="Título">
                    </div>

                    <div>
                        <input class="bg-purplle border-none rounded-xl placeholder-basic-gray mt-5 h-10rem w-full text-top focus:ring-0 " type="text" placeholder="Legenda">
                    </div>

                    <div class="">
                        <button class="bg-orange rounded-full px-8 py-2 mt-5">Avançar</button>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>