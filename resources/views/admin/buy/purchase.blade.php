<x-layouts.buylayout>
    <style>
        .font-nexo { font-family: 'Nexo Kora', sans-serif; letter-spacing: 0.05em; }
        .tracking-ultra { letter-spacing: 0.4em; }
        .tracking-glory { letter-spacing: 0.15em; }
    </style>

    <div class="w-full min-h-screen bg-stone-950 px-6 py-12 font-nexo overflow-y-auto">
        <div class="max-w-7xl mx-auto">
            
            <div class="mb-12 border-l-2 border-amber-600 pl-6">
                <h2 class="text-white text-3xl font-light uppercase tracking-tighter">
                    Available <span class="italic font-serif text-amber-500">Acquisitions</span>
                </h2>
                <p class="text-stone-500 text-[10px] uppercase tracking-ultra mt-2">Curated Horology Dashboard / System v2.0</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 pb-20">
                @if($allWatches->isNotEmpty())
                    @foreach($allWatches as $item)
                        <div class="group relative bg-stone-900/40 border border-white/5 backdrop-blur-sm overflow-hidden transition-all duration-700 hover:border-amber-500/30">
                            
                            <div class="flex justify-between items-center p-4 border-b border-white/5 bg-stone-950/50">
                                <span class="text-[9px] text-amber-500 font-bold uppercase tracking-glory">{{ $item->series }}</span>
                                <div class="flex space-x-1">
                                    <div class="w-1 h-1 rounded-full bg-emerald-500 animate-pulse"></div>
                                    <span class="text-[8px] text-stone-500 uppercase">In Stock</span>
                                </div>
                            </div>

                            <div class="h-72 w-full flex items-center justify-center bg-stone-950 relative overflow-hidden">
                                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(217,119,6,0.05)_0%,_transparent_70%)]"></div>
                                
                                <div class="relative z-10 transition-transform duration-1000 group-hover:scale-105">
                                    <img src="{{ asset($item->image_url) }}" alt="{{ $item->model_name }}" class="w-48 h-auto object-contain drop-shadow-[0_30px_50px_rgba(0,0,0,0.9)] grayscale-[0.5] group-hover:grayscale-0 transition-all duration-700">
                                </div>

                                <div class="absolute inset-x-0 bottom-0 translate-y-full group-hover:translate-y-0 transition-transform duration-500 bg-amber-600 p-2 flex justify-around items-center">
                                    <span class="text-[8px] text-white font-bold uppercase tracking-widest">{{ $item->movement_type }}</span>
                                    <span class="text-[8px] text-white/50">•</span>
                                    <span class="text-[8px] text-white font-bold uppercase tracking-widest">{{ $item->case_material }}</span>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="mb-6">
                                    <p class="text-[8px] text-stone-500 uppercase tracking-ultra mb-1">Model Reference</p>
                                    <h4 class="text-white text-2xl font-light uppercase tracking-tighter leading-none">
                                        {{ $item->model_name }}
                                    </h4>
                                    <span class="text-[10px] italic font-serif text-stone-400 mt-1 block opacity-60">Architectural Series</span>
                                </div>

                                <div class="flex items-end justify-between border-t border-white/5 pt-6">
                                    <div>
                                        <p class="text-[8px] text-stone-500 uppercase tracking-widest">Investment Value</p>
                                        <span class="text-amber-500 font-serif text-2xl tracking-tighter">
                                            ${{ number_format($item->price, 0) }}
                                        </span>
                                    </div>
                                    <div class="text-right">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('buy.detail', $item->slug) }}" class="p-3 border border-white/10 text-white hover:bg-white hover:text-black transition-all duration-500">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                            </a>
                                            <button class="px-6 py-3 bg-white text-black text-[10px] font-black uppercase tracking-widest hover:bg-amber-500 hover:text-white transition-all duration-500">
                                                Acquire
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute bottom-0 left-0 h-[1px] w-full bg-white/5"></div>
                            <div class="absolute bottom-0 left-0 h-[1px] w-0 bg-amber-500 group-hover:w-full transition-all duration-1000"></div>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-full py-24 text-center border border-dashed border-white/10">
                        <p class="text-stone-600 text-[10px] uppercase tracking-ultra">The collection is currently exhausted.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layouts.buylayout>