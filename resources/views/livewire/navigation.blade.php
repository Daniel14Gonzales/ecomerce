<header class="bg-Emerald-600">
    <div class="container flex itemd-center h-16">
        <a class="flex items-center justifyy-center px-5 bg-white bg-opacity-30 text-white cursor-pointer font-semibold h-full">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                </path>
            </svg>
            <span>
                Categorias
            </span>
        </a>
        <a class="mx-6" href="/">
            <x-jet-application-mark class="block h-10 w-auto ">
            </x-jet-application-mark>
        </a>
        @livewire('search')

        <x-search size="60" />
    </div>
</header>
