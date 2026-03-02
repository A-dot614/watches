<x-layouts.mainlayout>
<section id="collection" class="py-24 px-6 md:px-12 bg-stone-950">
    <div class="max-w-7xl mx-auto mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-xs uppercase tracking-[0.6em] text-amber-500 mb-4">Curated Series</h2>
            <h3 class="text-4xl md:text-5xl font-light text-white tracking-tight uppercase">The 2026 <span class="italic font-serif">Anthology</span></h3>
        </div>
        <div class="flex space-x-4">
            <button class="text-[10px] uppercase tracking-widest text-stone-500 hover:text-white transition underline underline-offset-8">All Models</button>
            <button class="text-[10px] uppercase tracking-widest text-stone-500 hover:text-white transition">Professional</button>
            <button class="text-[10px] uppercase tracking-widest text-stone-500 hover:text-white transition">Dress</button>
        </div>
    </div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
<div class="group relative bg-stone-900 border border-white/5 overflow-hidden transition-all duration-700 hover:shadow-[0_0_30px_rgba(217,119,6,0.1)] hover:border-amber-500/40">
    
    <div class="absolute top-4 right-4 z-20 flex flex-col items-end space-y-2">
        <div class="bg-amber-600 text-[8px] font-bold uppercase tracking-[0.2em] px-2.5 py-1 text-white shadow-xl">
            Top Rated
        </div>
        <div class="bg-white/5 backdrop-blur-md border border-white/10 text-[7px] font-medium uppercase tracking-[0.2em] px-2 py-1 text-stone-400">
            Series 04
        </div>
    </div>

    <div class="h-80 w-full flex items-center justify-center bg-stone-950 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_transparent_0%,_rgba(0,0,0,0.6)_100%)]"></div>
        
        <div class="animate-float transition-transform duration-700 group-hover:scale-110">
            <img src="{{ asset('images/watch1.png') }}" alt="Resistor Onyx" class="w-44 h-auto object-contain drop-shadow-[0_20px_30px_rgba(0,0,0,0.8)]">
        </div>

        <div class="absolute inset-x-0 bottom-0 translate-y-full group-hover:translate-y-0 transition-transform duration-500 bg-black/40 backdrop-blur-xl p-3 border-t border-white/10 flex justify-center space-x-4">
            <span class="text-[8px] text-amber-500 uppercase tracking-widest">Titanium</span>
            <span class="text-[8px] text-stone-400 uppercase tracking-widest">•</span>
            <span class="text-[8px] text-amber-500 uppercase tracking-widest">300M</span>
            <span class="text-[8px] text-stone-400 uppercase tracking-widest">•</span>
            <span class="text-[8px] text-amber-500 uppercase tracking-widest">Automatic</span>
        </div>
    </div>

    <div class="p-6 space-y-6">
        <div class="flex justify-between items-start">
            <div>
                <h4 class="text-white text-xl font-light tracking-tighter uppercase">Resistor <span class="italic font-serif text-stone-400 block text-sm mt-1">Onyx Stealth</span></h4>
            </div>
            <div class="text-right">
                <span class="text-amber-500 font-serif text-lg tracking-tighter">$4,250</span>
                <p class="text-[8px] text-stone-600 uppercase tracking-widest">Incl. Duties</p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-3">
            <a href="{{ route('detail', ['id' => 1]) }}" class="flex items-center justify-center py-3 border border-white/10 text-[9px] font-bold uppercase tracking-[0.2em] text-white hover:bg-white hover:text-black transition-all duration-500">
                See Details
            </a>
            
            <button class="flex items-center justify-center py-3 bg-amber-600 text-white text-[9px] font-bold uppercase tracking-[0.2em] hover:bg-amber-500 transition-all duration-500 shadow-lg shadow-amber-900/20 active:scale-95">
                Purchase
            </button>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 h-[2px] w-0 bg-amber-500 group-hover:w-full transition-all duration-1000"></div>
</div>



    </div>
</section>    
</x-layouts.mainlayout>