<x-layouts.adminlayout>
<section class="max-w-7xl mx-auto px-8 py-16 reveal reveal-3">
    
    <div class="flex flex-col lg:flex-row justify-between items-end mb-12 gap-8">
        <div class="space-y-4">
            <div class="flex items-center space-x-3">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                <h3 class="text-[10px] uppercase tracking-[0.6em] text-stone-500 font-bold">Active Inventory Registry</h3>
            </div>
            <p class="text-4xl font-light text-white uppercase tracking-tighter leading-none">
                Curated <span class="italic font-serif text-stone-500">Holdings</span>
            </p>
        </div>

        <div class="flex space-x-12 border-t border-white/5 lg:border-t-0 pt-6 lg:pt-0">
            <div class="text-right">
                <p class="text-[8px] uppercase tracking-widest text-stone-600 mb-1">Total Valuation</p>
                <p class="text-xl font-serif italic text-white">$21,350.00</p>
            </div>
            <div class="text-right">
                <p class="text-[8px] uppercase tracking-widest text-stone-600 mb-1">Vault Capacity</p>
                <div class="flex items-center space-x-3">
                    <span class="text-sm font-mono text-amber-500">12%</span>
                    <div class="w-24 h-[2px] bg-stone-900 overflow-hidden">
                        <div class="h-full bg-amber-500 w-[12%]"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <button class="group relative w-full lg:w-fit flex items-center bg-white hover:bg-amber-500 transition-all duration-500 overflow-hidden">
            <div class="absolute inset-0 w-0 bg-stone-900 transition-all duration-500 group-hover:w-full opacity-10"></div>
            
            <div class="bg-black/5 p-5 border-r border-black/5 group-hover:bg-black transition-colors">
                <svg class="w-5 h-5 text-black group-hover:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4" />
                </svg>
            </div>
            
            <div class="px-8 py-4">
                <span class="text-[10px] uppercase tracking-[0.5em] font-black text-black group-hover:text-white transition-colors">
                    Initialize New Asset Registry
                </span>
            </div>
            
            <div class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-40 group-hover:animate-shine"></div>
        </button>
    </div>

    <div class="bg-stone-900/10 border border-white/5 backdrop-blur-sm relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.02] pointer-events-none" style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 40px 40px;"></div>

        <div class="w-full overflow-x-auto custom-scrollbar relative z-10">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-[9px] uppercase tracking-[0.5em] text-stone-500 border-b border-white/5">
                        <th class="p-8 font-medium">Asset Piece</th>
                        <th class="p-8 font-medium">Reference</th>
                        <th class="p-8 font-medium">Market Value</th>
                        <th class="p-8 font-medium">Status / Rarity</th>
                        <th class="p-8 font-medium text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    
                    <tr class="group hover:bg-amber-500/[0.02] transition-all duration-500">
                        <td class="p-8">
                            <div class="flex items-center space-x-6">
                                <div class="relative w-20 h-20 bg-stone-950 flex-shrink-0 flex items-center justify-center p-3 border border-white/5 group-hover:border-amber-500/40 transition-all duration-700">
                                    <img src="watch-front.png" class="max-h-full object-contain drop-shadow-2xl z-10" alt="Onyx">
                                    <div class="absolute inset-4 bg-amber-500/5 blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs uppercase tracking-[0.2em] text-white font-bold">Resistor Onyx</p>
                                    <p class="text-[9px] text-stone-600 uppercase font-mono tracking-tighter">Forged Carbon Chassis</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-8">
                            <span class="px-3 py-1 bg-stone-950 text-[10px] font-mono text-stone-400 border border-white/5 tracking-tighter italic">#ONYX-2026-04</span>
                        </td>
                        <td class="p-8">
                            <div class="space-y-1">
                                <p class="text-lg font-serif italic text-white leading-none">$12,450</p>
                                <p class="text-[8px] text-emerald-500 uppercase tracking-widest">+2.4% Est.</p>
                            </div>
                        </td>
                        <td class="p-8">
                            <div class="flex flex-col space-y-2">
                                <span class="text-[8px] uppercase tracking-widest text-stone-300">Legendary Rarity</span>
                                <div class="w-32 h-[1px] bg-stone-800">
                                    <div class="h-full bg-amber-500 w-[90%]"></div>
                                </div>
                            </div>
                        </td>
                        <td class="p-8">
                            <div class="flex justify-end space-x-8">
                                <button class="group/btn flex flex-col items-end outline-none">
                                    <span class="text-[9px] uppercase tracking-[0.4em] text-stone-600 group-hover/btn:text-white transition-colors">Adjust</span>
                                    <span class="w-0 h-px bg-amber-500 group-hover/btn:w-full transition-all duration-500 mt-1"></span>
                                </button>
                                <button class="group/btn flex flex-col items-end outline-none">
                                    <span class="text-[9px] uppercase tracking-[0.4em] text-stone-800 group-hover/btn:text-red-500 transition-colors">Purge</span>
                                    <span class="w-0 h-px bg-red-500 group-hover/btn:w-full transition-all duration-500 mt-1"></span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="group hover:bg-white/[0.01] transition-all duration-500">
                        <td class="p-8">
                            <div class="flex items-center space-x-6">
                                <div class="w-20 h-20 bg-stone-950 flex-shrink-0 flex items-center justify-center p-3 border border-white/5 group-hover:border-stone-500 transition-all duration-700">
                                    <img src="watch-side.png" class="max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000" alt="Heritage">
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs uppercase tracking-[0.2em] text-stone-300 font-bold group-hover:text-white transition-colors">Heritage Steel</p>
                                    <p class="text-[9px] text-stone-600 uppercase font-mono tracking-tighter">Grade 5 Titanium</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-8">
                            <span class="px-3 py-1 bg-stone-950 text-[10px] font-mono text-stone-500 border border-white/5 tracking-tighter italic">#STEEL-2025-01</span>
                        </td>
                        <td class="p-8">
                            <div class="space-y-1">
                                <p class="text-lg font-serif italic text-stone-300 leading-none">$8,900</p>
                                <p class="text-[8px] text-stone-600 uppercase tracking-widest">Fixed Value</p>
                            </div>
                        </td>
                        <td class="p-8">
                            <div class="flex flex-col space-y-2">
                                <span class="text-[8px] uppercase tracking-widest text-stone-600">Standard Issue</span>
                                <div class="w-32 h-[1px] bg-stone-800">
                                    <div class="h-full bg-stone-600 w-[40%]"></div>
                                </div>
                            </div>
                        </td>
                        <td class="p-8">
                            <div class="flex justify-end space-x-8">
                                <button class="group/btn flex flex-col items-end outline-none">
                                    <span class="text-[9px] uppercase tracking-[0.4em] text-stone-600 group-hover/btn:text-white transition-colors">Adjust</span>
                                    <span class="w-0 h-px bg-amber-500 group-hover/btn:w-full transition-all duration-500 mt-1"></span>
                                </button>
                                <button class="group/btn flex flex-col items-end outline-none">
                                    <span class="text-[9px] uppercase tracking-[0.4em] text-stone-800 group-hover/btn:text-red-500 transition-colors">Purge</span>
                                    <span class="w-0 h-px bg-red-500 group-hover/btn:w-full transition-all duration-500 mt-1"></span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<style>
    @keyframes shine {
        100% {
            left: 125%;
        }
    }
    .animate-shine {
        animation: shine 0.8s;
    }
</style>
</x-layouts.adminlayout>
