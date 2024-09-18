<header>
    <div class="flex w-full">
        <div>
            <img src="{{ asset('images/logo1.png') }}" alt="logo">
        </div>
        <div class="flex flex-col justify-around">
            <div>
                <h1 class="font-semibold text-3xl text-center">Louez simplement votre matériel ou trouvez celui
                    dont vous avez besoin</h1>
            </div>
            <div class="flex">
                <input id="search" value="" type="search" placeholder="Rechercher une location">
                <button class="mr-20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                </button>
                <a href="{{ route('ad.create') }}">
                    <button class="bg-green-600 text-white">
                        Proposer une location&nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                        </svg
                    </button>
                </a>

            </div>
        </div>

    </div>

</header>
