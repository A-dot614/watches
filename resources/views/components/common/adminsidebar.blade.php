<div>
<aside class="fixed lg:static inset-y-0 left-0 w-72 bg-stone-950 border-r border-white/5 flex flex-col z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-500">
    
    <div class="p-10 border-b border-white/5 group cursor-pointer">
        <div class="flex items-center space-x-3">
            <div class="w-2 h-6 bg-amber-500 scale-y-75 group-hover:scale-y-100 transition-transform duration-500"></div>
            <h2 class="text-xl font-light tracking-[0.5em] uppercase text-white">
                Horo<span class="italic font-serif text-stone-500">logon</span>
            </h2>
        </div>
    </div>

    <nav class="flex-1 p-6 mt-4 space-y-1">
        
        <a href="{{ route('dashboard') }}" class="group relative flex items-center justify-between px-6 py-4 bg-white/[0.02] border border-white/5 shadow-2xl transition-all">
            <div class="absolute left-0 top-1/2 -translate-y-1/2 w-[2px] h-6 bg-amber-500 shadow-[0_0_15px_rgba(245,158,11,0.6)]"></div>
            
            <div class="flex flex-col">
                <span class="text-[10px] uppercase tracking-[0.4em] text-white font-bold">The Dash</span>
                <span class="text-[7px] uppercase tracking-[0.2em] text-amber-500/50 mt-1 font-mono italic">Board</span>
            </div>
            
            <svg class="w-3 h-3 text-stone-700 group-hover:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>

        <a href="{{ route('card') }}" class="group flex items-center justify-between px-6 py-4 hover:bg-white/[0.01] border border-transparent hover:border-white/5 transition-all">
            <div class="flex flex-col">
                <span class="text-[10px] uppercase tracking-[0.4em] text-stone-500 group-hover:text-stone-300">List</span>
                <span class="text-[7px] uppercase tracking-[0.2em] text-stone-700 mt-1 font-mono">Market Records</span>
            </div>
        </a>

        <a href="#" class="group flex items-center justify-between px-6 py-4 hover:bg-white/[0.01] border border-transparent hover:border-white/5 transition-all">
            <div class="flex flex-col">
                <span class="text-[10px] uppercase tracking-[0.4em] text-stone-500 group-hover:text-stone-300">Digital Twins</span>
                <span class="text-[7px] uppercase tracking-[0.2em] text-stone-700 mt-1 font-mono">Asset Authentication</span>
            </div>
        </a>

        <a href="#" class="group flex items-center justify-between px-6 py-4 hover:bg-white/[0.01] border border-transparent hover:border-white/5 transition-all">
            <div class="flex flex-col">
                <span class="text-[10px] uppercase tracking-[0.4em] text-stone-500 group-hover:text-stone-300">Service</span>
                <span class="text-[7px] uppercase tracking-[0.2em] text-stone-700 mt-1 font-mono">Interval Tracking</span>
            </div>
        </a>
    </nav>

    <div class="p-8 mt-auto space-y-6">
        <div class="space-y-2">
            <div class="flex justify-between items-center text-[8px] uppercase tracking-[0.3em] text-stone-600">
                <span>Vault Capacity</span>
                <span>30%</span>
            </div>
            <div class="h-[2px] w-full bg-stone-900 overflow-hidden">
                <div class="h-full bg-stone-700 w-[30%] group-hover:bg-amber-500 transition-all duration-700"></div>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-[8px] uppercase tracking-[0.4em] text-stone-800 font-bold">Onyx Protocol</span>
                <span class="text-[7px] uppercase tracking-[0.2em] text-stone-600 font-mono">v.2.0.6_Onyx</span>
            </div>
            <div class="w-2 h-2 rounded-full bg-amber-500 animate-pulse shadow-[0_0_8px_rgba(245,158,11,0.4)]"></div>
        </div>
    </div>
</aside>
</div>
