<x-layouts.adminlayout>
    <div class="p-8 bg-stone-950 h-auto min-h-screen overflow-y-auto">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12 border-b border-white/5 pb-8">
            <div>
                <h2 class="text-xs uppercase tracking-[0.6em] text-amber-500 mb-2">Inventory Management</h2>
                <h3 class="text-3xl font-light text-white uppercase tracking-tighter">The <span class="italic font-serif">Inventory</span> Hub</h3>
            </div>
            <a href="{{ route('create') }}" class="px-8 py-3 bg-amber-600 text-white text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-amber-500 transition-all duration-500 shadow-lg shadow-amber-900/20">
                Add New Piece
            </a>
        </div>

        @if(session('success'))
        <div class="mb-8 animate-in fade-in slide-in-from-top duration-700">
            <div class="relative bg-emerald-500/5 border border-emerald-500/20 p-4 overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-1 bg-emerald-500"></div>
                
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-[0.3em] text-emerald-500 font-bold leading-none mb-1">Entry Confirmed</p>
                            <p class="text-stone-300 text-xs font-light tracking-wide">{{ session('success') }}</p>
                        </div>
                    </div>
                    
                    <div class="hidden sm:block opacity-10">
                        <span class="text-4xl font-serif italic text-white">Success</span>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="grid grid-cols-1 gap-4">
            <div class="hidden md:grid grid-cols-12 px-6 py-4 text-[10px] uppercase tracking-[0.3em] text-stone-500 font-bold border-b border-white/10">
                <div class="col-span-2">Model</div>
                <div class="col-span-2">Series</div>
                <div class="col-span-2">Movement</div>
                <div class="col-span-2">Price</div>
                <div class="col-span-2">Status</div>
                <div class="col-span-2 text-right">Actions</div>
            </div>

            @if ($allWatches->isNotEmpty())
                @foreach ($allWatches as $item)
                <div class="group relative bg-stone-900 border border-white/5 overflow-hidden transition-all duration-500 hover:border-amber-500/40">
                    <div class="grid grid-cols-1 md:grid-cols-12 items-center p-6 gap-4">
                        
                        <div class="col-span-2 flex items-center space-x-4">
                            <div class="w-12 h-12 bg-stone-950 flex items-center justify-center border border-white/10 p-1">
                                <img src="{{ asset($item->image_url) }}" alt="{{ $item->model_name }}" class="max-w-full max-h-full object-contain grayscale group-hover:grayscale-0 transition-all duration-700">
                            </div>
                            <div>
                                <h4 class="text-white text-sm font-medium uppercase tracking-tight">{{ $item->model_name }}</h4>
                                <p class="text-[8px] text-stone-500 uppercase tracking-widest leading-none">Ref.{{ $item->slug }}</p>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <span class="text-[10px] text-stone-400 uppercase tracking-wider">{{ $item->series }}</span>
                        </div>

                        <div class="col-span-2">
                            <span class="text-[10px] text-stone-400 uppercase tracking-wider">{{ $item->movement_type }}</span>
                        </div>

                        <div class="col-span-2">
                            <span class="text-amber-500 font-serif text-md">${{ number_format($item->price, 2) }}</span>
                        </div>

                        <div class="col-span-2">
                            <span class="px-3 py-1 {{ $item->is_active ? 'bg-emerald-500/5 border-emerald-500/20 text-emerald-500' : 'bg-red-500/5 border-red-500/20 text-red-500' }} border text-[8px] uppercase tracking-widest">
                                {{ $item->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </div>

                        <div class="col-span-2 flex justify-end space-x-2">
                            <a href="#" title="View Piece" class="p-2 border border-white/10 text-stone-400 hover:text-amber-500 hover:bg-amber-500/5 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>                            
                            <a href="#" class="p-2 border border-white/10 text-stone-400 hover:text-white hover:bg-stone-800 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                            
                            <form action="#" method="POST" onsubmit="return confirm('Archive this piece from the collection?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 border border-white/10 text-stone-400 hover:text-red-500 hover:bg-red-500/10 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form> 
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 h-[1px] w-0 bg-amber-500 group-hover:w-full transition-all duration-700"></div>
                </div>
                @endforeach
            @else
                <div class="py-20 text-center border border-dashed border-white/10">
                    <p class="text-stone-500 text-xs uppercase tracking-widest">No pieces found in the collection.</p>
                </div>
            @endif
        </div>
    </div>
</x-layouts.adminlayout>