<x-layouts.mainlayout>
    <style>
        @keyframes reveal {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-reveal {
            opacity: 0;
            animation: reveal 1s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 3px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #0c0a09; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #78716c; }
    </style>

    <main class="relative min-h-screen grid grid-cols-1 lg:grid-cols-2 pt-40 lg:pt-0 bg-stone-950 overflow-x-hidden">
        
        <div class="absolute top-12 left-8 z-30 lg:hidden">
            <a href="{{ route('collection') }}" class="flex items-center space-x-3 text-[10px] uppercase tracking-[0.3em] text-stone-500 hover:text-amber-500 transition-all">
                <span class="p-2 border border-white/10 bg-stone-900/50 backdrop-blur-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
                <span class="font-bold">Back</span>
            </a>
        </div>

        <div class="relative h-[80vh] lg:h-screen bg-stone-900 flex flex-col items-center justify-center overflow-hidden border-r border-white/5">
            <div class="absolute w-[600px] h-[600px] bg-amber-600/5 rounded-full blur-[150px]"></div>
            
            <img src="{{ $okatia->image_url }}" alt="{{ $okatia->name }}" 
                 class="relative z-10 w-2/3 object-contain drop-shadow-[0_60px_70px_rgba(0,0,0,0.9)] hover:scale-105 transition-transform duration-1000 ease-out">
            
            <div class="absolute bottom-24 z-20 grid grid-cols-4 gap-px bg-white/10 border border-white/10">
                @if($okatia->images->isNotEmpty())
                    @foreach($okatia->images as $image)
                    <button class="w-16 h-16 bg-stone-950 overflow-hidden group relative outline-none">
                        <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                        <img src="{{ $image->image_url }}" class="w-full h-full object-cover opacity-40 group-hover:opacity-100 transition-all duration-700">
                        <div class="absolute bottom-0 left-0 w-0 h-[1px] bg-amber-500 group-hover:w-full transition-all duration-500 z-20"></div>
                    </button>
                    @endforeach
                @endif    
            </div>

            <div class="absolute bottom-12 left-12 flex items-center space-x-4 opacity-30">
                <div class="h-[1px] w-12 bg-amber-500"></div>
                <span class="text-[9px] uppercase tracking-[0.6em] text-stone-200">Ref. {{ $okatia->reference_number }}</span>
            </div>
        </div>

        <div class="p-8 md:p-16 lg:p-24 flex flex-col justify-center bg-stone-950 relative custom-scrollbar lg:overflow-y-auto">
            
            <div class="hidden lg:block absolute top-12 left-24 group">
                <a href="{{ route('collection') }}" class="flex items-center space-x-4 text-[10px] uppercase tracking-[0.4em] text-stone-600 hover:text-white transition-all duration-700">
                    <span class="h-[1px] w-12 bg-stone-800 group-hover:bg-amber-500 group-hover:w-20 transition-all"></span>
                    <span>Collection Anthology</span>
                </a>
            </div>

            <header class="mb-14 animate-reveal" style="animation-delay: 0.2s;">
                <div class="flex items-center space-x-3 mb-6">
                    <span class="h-[1px] w-6 bg-amber-500"></span>
                    <span class="text-amber-500 text-[10px] tracking-[0.5em] uppercase font-bold">Limited to 100 Pieces</span>
                </div>
                <h1 class="text-6xl md:text-8xl font-light mb-6 uppercase tracking-tighter leading-[0.85] text-white">
                    {{ $okatia->model_name }} <br>
                    <span class="italic font-serif text-stone-500">{{ $okatia->series }}</span>
                </h1>
                <div class="flex items-center space-x-8 mt-8">
                    <p class="text-4xl font-serif italic text-white">${{ number_format($okatia->price) }}</p>
                    <div class="h-8 w-[1px] bg-white/10"></div>
                    <span class="text-[10px] uppercase tracking-[0.3em] text-stone-500">Global Priority Shipping</span>
                </div>
            </header>

            <div class="space-y-12 animate-reveal" style="animation-delay: 0.4s;">
                <p class="text-stone-400 leading-relaxed text-lg font-light border-l border-amber-500/30 pl-8 max-w-xl">
                    {{ $okatia->description }} Constructed with a <span class="text-white">{{ $okatia->material }}</span> case, <span class="text-white">{{ $okatia->crystal_type }}</span>, <span class="text-white">{{ $okatia->water_resistance }}</span>, and powered by an <span class="text-white">{{ $okatia->movement }}</span> movement.
                </p>

                <div class="grid grid-cols-2 gap-y-12 gap-x-12 border-t border-white/5 pt-12">
                    <div class="group cursor-default">
                        <h4 class="text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-3 group-hover:text-amber-500 transition">The Heart</h4>
                        <p class="text-sm text-white font-medium italic">{{ $okatia->movement_type }}</p>
                    </div>
                    <div class="group cursor-default">
                        <h4 class="text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-3 group-hover:text-amber-500 transition">The Shield</h4>
                        <p class="text-sm text-white font-medium italic">{{ $okatia->crystal_type }}</p>
                    </div>
                    <div class="group cursor-default">
                        <h4 class="text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-3 group-hover:text-amber-500 transition">Depth Rating</h4>
                        <p class="text-sm text-white font-medium italic">{{ $okatia->water_resistance }}</p>
                    </div>
                    <div class="group cursor-default">
                        <h4 class="text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-3 group-hover:text-amber-500 transition">Case Material</h4>
                        <p class="text-sm text-white font-medium italic">{{ $okatia->case_material }}</p>
                    </div>
                </div>

                <div class="pt-10 flex flex-col sm:flex-row gap-5">
                    <button class="flex-[2] bg-white text-black py-6 text-[11px] uppercase tracking-[0.4em] font-bold hover:bg-amber-600 hover:text-white transition-all duration-700 active:scale-95 shadow-2xl">
                        Acquire Piece
                    </button>
                    <button class="flex-1 border border-white/10 py-6 text-[11px] uppercase tracking-[0.4em] font-bold hover:bg-white/5 transition-all duration-500">
                        Private Inquiry
                    </button>
                </div>
            </div>
        </div>
    </main>
</x-layouts.mainlayout>