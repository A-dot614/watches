<x-layouts.buylayout>
    <style>
        /* Typography & Custom Scrollbar */
        .font-nexo { font-family: 'Nexo Kora', sans-serif; }
        .tracking-editorial { letter-spacing: 0.5em; }
        
        /* Custom scrollbar for the right side */
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #0c0a09; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #78350f; border-radius: 10px; }
        
        @keyframes reveal {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-reveal { animation: reveal 1s ease-out forwards; }
    </style>

    <div class="flex flex-col lg:flex-row h-screen bg-stone-950 font-nexo selection:bg-amber-500/30 overflow-hidden">
        
        <div class="lg:w-1/2 h-[50vh] lg:h-full bg-stone-900/20 flex items-center justify-center overflow-hidden border-r border-white/5 relative">
            <div class="absolute w-[400px] h-[400px] bg-amber-600/10 rounded-full blur-[120px] animate-pulse"></div>
            
            <div class="absolute top-8 left-8 flex items-center space-x-4 opacity-50 z-20">
                <span class="text-[9px] uppercase tracking-editorial text-amber-500 font-bold">Identity</span>
                <div class="h-[1px] w-8 bg-stone-800"></div>
                <span class="text-[9px] uppercase tracking-widest text-stone-400">Ref. {{ $okatia->slug }}</span>
            </div>

            <img src="{{ asset($okatia->image_url) }}" alt="{{ $okatia->model_name }}" 
                 class="relative z-10 w-3/4 max-h-[80%] object-contain drop-shadow-[0_40px_60px_rgba(0,0,0,0.9)] hover:scale-105 transition-transform duration-1000">
            
            <div class="absolute bottom-8 z-20 flex gap-2 p-1 bg-stone-900/50 backdrop-blur-md border border-white/5">
                @if($okatia->images && $okatia->images->isNotEmpty())
                    @foreach($okatia->images as $image)
                    <button class="w-12 h-12 bg-stone-950 border border-white/5 overflow-hidden group transition-all hover:border-amber-500/50">
                        <img src="{{ asset($image->image_url) }}" class="w-full h-full object-cover opacity-50 group-hover:opacity-100 transition-all duration-500">
                    </button>
                    @endforeach
                @endif    
            </div>
        </div>

        <div class="lg:w-1/2 h-full p-8 md:p-16 lg:p-24 flex flex-col bg-stone-950 relative custom-scrollbar overflow-y-auto">
            
            <div class="mb-12">
                <a href="{{ route('purchase') }}" class="group inline-flex items-center space-x-4 text-[9px] uppercase tracking-editorial text-stone-500 hover:text-white transition-all">
                    <span class="h-[1px] w-8 bg-stone-800 group-hover:bg-amber-500 group-hover:w-12 transition-all"></span>
                    <span>Back to Anthology</span>
                </a>
            </div>

            <header class="mb-16 animate-reveal opacity-0" style="animation-delay: 0.2s;">
                <div class="flex items-center space-x-3 mb-8">
                    <span class="px-3 py-1 bg-amber-500/10 border border-amber-500/20 text-amber-500 text-[8px] tracking-[0.4em] uppercase font-black">Limited Edition</span>
                </div>
                
                <h1 class="text-5xl md:text-7xl font-light mb-4 uppercase tracking-tighter leading-none text-white">
                    {{ $okatia->model_name }}<br>
                    <span class="italic font-serif text-amber-600/80">{{ $okatia->series }}</span>
                </h1>

                <div class="flex items-baseline space-x-6 mt-10">
                    <p class="text-4xl font-serif italic text-white">${{ number_format($okatia->price) }}</p>
                    <span class="text-[9px] uppercase tracking-widest text-stone-600">Global security transport included</span>
                </div>
            </header>

            <div class="space-y-12 animate-reveal opacity-0" style="animation-delay: 0.4s;">
                <div class="relative">
                    <div class="absolute -left-8 top-0 h-full w-[1px] bg-gradient-to-b from-amber-600/50 to-transparent"></div>
                    <p class="text-stone-400 leading-relaxed text-lg font-light max-w-xl italic">
                        {{ $okatia->description }}
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-y-10 gap-x-12 border-t border-white/5 pt-12">
                    <div class="group">
                        <h4 class="text-[8px] uppercase tracking-editorial text-stone-500 mb-2 group-hover:text-amber-500 transition-colors">Internal Caliber</h4>
                        <p class="text-sm text-white font-medium uppercase tracking-widest">{{ $okatia->movement_type }}</p>
                    </div>
                    <div class="group">
                        <h4 class="text-[8px] uppercase tracking-editorial text-stone-500 mb-2 group-hover:text-amber-500 transition-colors">Crystal Shield</h4>
                        <p class="text-sm text-white font-medium uppercase tracking-widest">{{ $okatia->crystal_type }}</p>
                    </div>
                    <div class="group">
                        <h4 class="text-[8px] uppercase tracking-editorial text-stone-500 mb-2 group-hover:text-amber-500 transition-colors">Depth Rating</h4>
                        <p class="text-sm text-white font-medium uppercase tracking-widest">{{ $okatia->water_resistance }}</p>
                    </div>
                    <div class="group">
                        <h4 class="text-[8px] uppercase tracking-editorial text-stone-500 mb-2 group-hover:text-amber-500 transition-colors">Composition</h4>
                        <p class="text-sm text-white font-medium uppercase tracking-widest">{{ $okatia->case_material }}</p>
                    </div>
                </div>

                <div class="pt-8 flex flex-col sm:flex-row gap-4">
                    <button class="flex-[2] bg-white text-black py-5 text-[10px] uppercase tracking-[0.5em] font-black hover:bg-amber-600 hover:text-white transition-all duration-700 active:scale-[0.98] shadow-2xl">
                        Acquire Piece
                    </button>
                    <button class="flex-1 border border-white/10 py-5 text-[10px] uppercase tracking-[0.5em] font-black text-stone-400 hover:bg-white/5 hover:text-white transition-all duration-500">
                        Inquiry
                    </button>
                </div>

                <div class="flex items-center space-x-2 pt-12 pb-12">
                    <div class="w-1.5 h-1.5 rounded-full bg-emerald-500"></div>
                    <span class="text-[8px] uppercase tracking-[0.3em] text-stone-500">Secure transaction encrypted via Horology-Chain</span>
                </div>
            </div>
        </div>
    </div>
</x-layouts.buylayout>