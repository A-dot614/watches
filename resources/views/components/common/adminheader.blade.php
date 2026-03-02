<div>
<header class="h-24 border-b border-white/5 flex items-center justify-between px-8 lg:px-12 bg-stone-950/80 backdrop-blur-2xl sticky top-0 z-40">
    
    <div class="flex items-center space-x-8">
        <label for="menu-toggle" class="lg:hidden cursor-pointer group p-2 -ml-2 transition-colors">
            <svg class="w-5 h-5 text-stone-500 group-hover:text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
        
        <div class="hidden md:flex flex-col">
            <h1 class="text-[9px] uppercase tracking-[0.6em] text-stone-500 italic font-mono leading-none">
                Node_Primary <span class="text-stone-800 mx-2">/</span> <span class="text-stone-300">Auth_ID: 0882-X</span>
            </h1>
            <div class="flex items-center space-x-2 mt-1.5">
                <span class="w-1 h-1 rounded-full bg-amber-500 animate-pulse"></span>
                <span class="text-[7px] uppercase tracking-[0.4em] text-amber-500/50">Live Encryption Active</span>
            </div>
        </div>
    </div>

    <div class="flex items-center space-x-10">
        
        <div class="hidden sm:flex items-center space-x-6 border-r border-white/5 pr-10">
            <div class="text-right">
                <p class="text-[10px] uppercase tracking-[0.3em] text-white font-bold leading-none">E. Chronos</p>
                <p class="text-[8px] uppercase tracking-[0.2em] text-stone-500 mt-1.5 italic font-serif">Anthology Collector</p>
            </div>
            <div class="w-9 h-9 border border-white/10 bg-stone-900/50 flex items-center justify-center relative overflow-hidden group hover:border-amber-500/50 transition-colors cursor-pointer">
                <span class="text-[10px] font-serif italic text-amber-500 group-hover:scale-110 transition-transform duration-500">EC</span>
                <div class="absolute inset-0 bg-gradient-to-tr from-amber-500/5 to-transparent"></div>
            </div>
        </div>
        
        <form method="POST" action="{{ route('logout') }}" class="m-0">
            @csrf
            <button type="submit" class="group relative flex items-center space-x-4 px-2 py-1 outline-none">
                <div class="flex flex-col text-right">
                    <span class="text-[9px] uppercase tracking-[0.4em] text-stone-500 group-hover:text-white transition-all duration-300">Terminate</span>
                    <span class="text-[7px] uppercase tracking-[0.2em] text-stone-700 group-hover:text-amber-500/50 transition-all duration-300">Session</span>
                </div>
                
                <div class="relative">
                    <svg class="w-4 h-4 text-stone-600 group-hover:text-amber-500 transition-all duration-500 transform group-hover:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <div class="absolute inset-0 rounded-full bg-amber-500/20 scale-0 group-hover:scale-150 opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                </div>
            </button>
        </form>
    </div> 
</header>
</div>
