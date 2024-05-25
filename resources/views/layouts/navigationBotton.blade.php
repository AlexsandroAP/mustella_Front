<nav x-data="{ open: false }" class="flex justify-center items-center bg-purplle p-4 md:p-5 rounded-t-extra-lg border-none fixed bottom-0 left-0 w-full z-50 border-gray-100">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex justify-center items-center">
                <button class="rounded-r-full">
                    <img class="w-10 h-10" src="{{ asset('imagens/lock.png') }}" alt="lupa">
                </button>

                <button class="rounded-r-full ml-20">
                    <img class="w-10 h-10" src="{{ asset('imagens/home.png') }}" alt="lupa">
                </button>

                <a href="{{route('postagem')}}">
                    <button class="rounded-r-full ml-20">
                        <img class="w-10 h-10" src="{{ asset('imagens/mais.png') }}" alt="lupa">
                    </button>
                </a>
            </div>
</nav>
