<div>   
<nav class="fixed top-0 w-full z-50 bg-stone-950/80 backdrop-blur-2xl border-b border-white/5 px-6 md:px-12 py-0 h-24 flex justify-between items-center group">
    
    <div class="flex flex-col">
        <div class="text-2xl font-light tracking-[0.4em] uppercase text-white leading-none">
            Horo<span class="italic font-serif text-stone-500">logos</span>
        </div>
        <div class="flex items-center space-x-2 mt-2 opacity-40 group-hover:opacity-100 transition-opacity duration-700">
            <span class="h-[1px] w-4 bg-amber-500"></span>
            <span class="text-[7px] uppercase tracking-[0.6em] text-stone-300 font-mono">Anthology Series 2026</span>
        </div>
    </div>
    
    <div class="hidden lg:flex items-center space-x-12 text-[9px] uppercase tracking-[0.5em] font-semibold">
        @foreach(['home', 'about', 'collection', 'contact'] as $link)
        <a href="{{ route($link) }}" class="relative py-2 {{ request()->routeIs($link) ? 'text-white' : 'text-stone-500' }} hover:text-white transition-colors group/nav">
            {{ ucfirst($link) }}
            <span class="absolute bottom-0 left-0 {{ request()->routeIs($link) ? 'w-full' : 'w-0' }} h-[1px] bg-amber-500 transition-all duration-500 group-hover/nav:w-full"></span>
        </a>
        @endforeach
    </div>

    <div class="flex items-center space-x-4 md:space-x-8">
        <a href="{{ route('login') }}" class="hidden sm:flex text-[10px] uppercase tracking-[0.4em] text-stone-400 hover:text-white transition-all group/login items-center">
            <span class="mr-3 opacity-0 group-hover/login:opacity-100 transition-opacity text-amber-500">—</span>
            Login
        </a>

        <a href="{{ route('register') }}" class="relative px-6 md:px-8 py-4 overflow-hidden group/btn bg-white transition-all duration-500">
            <span class="absolute inset-0 w-0 bg-amber-600 transition-all duration-500 group-hover/btn:w-full"></span>
            
            <span class="relative z-10 text-[10px] uppercase tracking-[0.5em] font-bold text-black group-hover/btn:text-white transition-colors duration-500">
                Register
            </span>
        </a>

        <button class="lg:hidden text-white p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 8h16M4 16h16" />
            </svg>
        </button>
    </div>

    <div class="absolute top-0 right-0 h-px w-24 bg-gradient-to-l from-amber-500/20 to-transparent"></div>
</nav>
</div>