<div>
<aside class="fixed lg:sticky top-0 inset-y-0 left-0 w-80 bg-stone-950 border-r border-white/5 flex flex-col z-50 transform -translate-x-full lg:translate-x-0 transition-all duration-700 ease-in-out font-nexo">
    
    <div class="p-12 border-b border-white/5 relative group cursor-pointer overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-amber-500/0 via-amber-500/[0.02] to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
        
        <div class="relative z-10 flex flex-col space-y-1">
            <span class="text-[8px] uppercase tracking-[0.8em] text-amber-600 font-black mb-2 block">Grand Anthology</span>
            <h2 class="text-2xl font-light tracking-[0.3em] uppercase text-white leading-none">
                Horo<span class="italic font-serif text-stone-500 group-hover:text-amber-500 transition-colors duration-700">logon</span>
            </h2>
            <div class="h-[1px] w-12 bg-stone-800 group-hover:w-24 group-hover:bg-amber-500 transition-all duration-700 mt-4"></div>
        </div>
    </div>

    <nav class="flex-1 px-8 py-10 space-y-10 custom-scrollbar overflow-y-auto">
        
        <div class="space-y-4">
            <p class="text-[9px] uppercase tracking-[0.6em] text-stone-600 font-bold ml-4">Core Modules</p>
            
            <a href="{{ route('dashboard') }}" class="group relative flex flex-col px-4 py-5 hover:bg-white/[0.02] transition-all duration-500 border-l border-white/5 hover:border-amber-500/50">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[11px] uppercase tracking-[0.4em] text-white group-hover:text-amber-500 transition-colors">The Dashboard</span>
                    <span class="text-[8px] font-serif italic text-stone-700 group-hover:text-stone-500">01</span>
                </div>
                <span class="text-[7px] uppercase tracking-[0.2em] text-stone-500 font-mono italic">Real-time valuation system</span>
            </a>

            <a href="{{ route('purchase') }}" class="group relative flex flex-col px-4 py-5 hover:bg-white/[0.02] transition-all duration-500 border-l border-white/5 hover:border-amber-500/50">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[11px] uppercase tracking-[0.4em] text-stone-400 group-hover:text-white transition-colors">Acquisitions</span>
                    <span class="text-[8px] font-serif italic text-stone-700">02</span>
                </div>
                <span class="text-[7px] uppercase tracking-[0.2em] text-stone-600 font-mono italic">Browse curated vault</span>
            </a>
        </div>

        <div class="space-y-4">
            <p class="text-[9px] uppercase tracking-[0.6em] text-stone-600 font-bold ml-4">Horological Utility</p>
            
            <a href="#" class="group relative flex flex-col px-4 py-5 hover:bg-white/[0.02] transition-all duration-500 border-l border-white/5 hover:border-amber-500/50">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[11px] uppercase tracking-[0.4em] text-stone-400 group-hover:text-white transition-colors">Digital Twins</span>
                    <span class="text-[8px] font-serif italic text-stone-700">03</span>
                </div>
                <span class="text-[7px] uppercase tracking-[0.2em] text-stone-600 font-mono italic">Asset authentication</span>
            </a>

            <a href="#" class="group relative flex flex-col px-4 py-5 hover:bg-white/[0.02] transition-all duration-500 border-l border-white/5 hover:border-amber-500/50">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[11px] uppercase tracking-[0.4em] text-stone-400 group-hover:text-white transition-colors">Service Hub</span>
                    <span class="text-[8px] font-serif italic text-stone-700">04</span>
                </div>
                <span class="text-[7px] uppercase tracking-[0.2em] text-stone-600 font-mono italic">Maintenance & Repair</span>
            </a>
        </div>
    </nav>

    <div class="p-10 border-t border-white/5 bg-black/20">
        <div class="space-y-6">
            <div class="space-y-3">
                <div class="flex justify-between items-end">
                    <span class="text-[8px] uppercase tracking-[0.5em] text-stone-500">Vault Security</span>
                    <span class="text-[10px] text-amber-500 font-serif italic">Lv. 04</span>
                </div>
                <div class="h-[1px] w-full bg-stone-900 relative overflow-hidden">
                    <div class="absolute inset-y-0 left-0 bg-amber-600 w-[65%] shadow-[0_0_10px_#d97706] animate-pulse"></div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-4 border-t border-white/5">
                <div class="flex flex-col">
                    <span class="text-[9px] uppercase tracking-[0.4em] text-white font-bold mb-1">System Onyx</span>
                    <span class="text-[7px] uppercase tracking-[0.2em] text-stone-600 font-mono">Build v.2.0.6_Alpha</span>
                </div>
                <div class="group relative flex items-center justify-center">
                    <div class="absolute w-4 h-4 rounded-full bg-amber-500/20 animate-ping"></div>
                    <div class="w-2 h-2 rounded-full bg-amber-500 shadow-[0_0_10px_rgba(245,158,11,0.8)]"></div>
                </div>
            </div>
        </div>
    </div>
</aside>
</div>
