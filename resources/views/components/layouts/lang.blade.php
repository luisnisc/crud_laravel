<div x-data="{ open: false }" class="relative inline-block text-left">
    <button @click="open = !open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none" id="lang-menu-button" aria-haspopup="true" aria-expanded="true">
        <img src="{{ asset('images/flags/' . app()->getLocale() . '.png') }}" alt="{{ strtoupper(app()->getLocale()) }}" class="w-5 h-5 mr-2">
        @if(app()->getLocale() === 'en')
            English
        @elseif(app()->getLocale() === 'es')
            Español
        @elseif(app()->getLocale() === 'fr')
            Français
        @endif
        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="lang-menu-button">
        <div class="py-1">
            <a href="{{ route('lang.switch', 'es') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                <img src="{{ asset('images/flags/es.png') }}" alt="Español" class="w-5 h-5 mr-2">
                Español
            </a>
            <a href="{{ route('lang.switch', 'en') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                <img src="{{ asset('images/flags/en.png') }}" alt="English" class="w-5 h-5 mr-2">
                English
            </a>
            
            <a href="{{ route('lang.switch', 'fr') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                <img src="{{ asset('images/flags/fr.png') }}" alt="Français" class="w-5 h-5 mr-2">
                Français
            </a>
        </div>
    </div>
</div>