<x-layouts.adminlayout>
    <div class="h-screen overflow-y-auto bg-[#0a0a0a]">
        <div class="max-w-6xl mx-auto py-10 px-6">
            
            <div class="mb-10 border-b border-white/10 pb-10">
                <div class="flex items-center gap-4 mb-6">
                    <a href="javascript:history.back()" class="group flex items-center justify-center w-10 h-10 border border-white/10 hover:border-yellow-400 transition-all">
                        <svg class="w-5 h-5 text-zinc-500 group-hover:text-yellow-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </a>
                    <nav class="flex items-center gap-2 text-sm text-zinc-500">
                        <a href="#" class="hover:text-yellow-400 transition-colors uppercase tracking-widest text-[10px] font-black">Catalog</a>
                        <span class="text-zinc-800">/</span>
                        <span class="text-zinc-300 font-medium uppercase tracking-widest text-[10px]">New Timepiece</span>
                    </nav>
                </div>

                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                    <div>
                        <h1 class="text-4xl font-black text-white tracking-tighter uppercase leading-none">Watch Management</h1>
                        <p class="text-zinc-500 mt-3 text-sm uppercase tracking-wider font-medium">Configure luxury specifications and inventory.</p>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        <!-- <button type="reset" form="watch-form" class="px-5 py-3 text-[10px] font-black text-white bg-transparent border border-white/20 hover:bg-white hover:text-black transition-all uppercase tracking-[0.2em]">
                            Discard
                        </button> -->
                        <button form="watch-form" type="submit" class="px-8 py-3 text-[10px] font-black text-black bg-yellow-400 hover:bg-yellow-500 shadow-[0_0_20px_rgba(250,204,21,0.2)] active:scale-95 transition-all uppercase tracking-[0.2em]">
                            Publish Product
                        </button>
                    </div>
                </div>
            </div>

<form id="watch-form" action="{{ route('card') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-10 pb-20">
    @csrf

    <div class="lg:col-span-2 space-y-10">
        <div class="bg-zinc-900 p-8 rounded-none border border-white/5 relative shadow-2xl">
            <div class="absolute top-0 left-0 w-full h-[2px] bg-yellow-400"></div>
            <h2 class="text-lg font-black text-white mb-8 uppercase tracking-widest flex items-center gap-3">
                <span class="text-yellow-400 text-2xl">01</span> General Details
            </h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-[10px] font-black text-zinc-500 mb-2 uppercase tracking-[0.2em]">Product Model Name</label>
                    <input type="text" name="model_name" value="{{ old('model_name') }}" placeholder="CHRONO-MAX GOLD EDITION" required
                        class="w-full px-5 py-4 rounded-none border border-zinc-800 bg-black text-white focus:ring-1 focus:ring-yellow-400 focus:border-yellow-400 outline-none transition-all placeholder:text-zinc-700">
                     @error('model_name') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-zinc-500 mb-2 uppercase tracking-[0.2em]">Series</label>
                        <input type="text" name="series" value="{{ old('series') }}" placeholder="Prestige Line"
                            class="w-full px-5 py-4 rounded-none border border-zinc-800 bg-black text-white focus:ring-1 focus:ring-yellow-400 focus:border-yellow-400 outline-none transition-all placeholder:text-zinc-700">
                        @error('series') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
                    </div>
                    <!-- <div>
                        <label class="block text-[10px] font-black text-zinc-500 mb-2 uppercase tracking-[0.2em]">URL Slug / Unique SKU</label>
                        <input type="text" name="slug" value="{{ old('slug') }}" placeholder="chrono-max-gold"
                            class="w-full px-5 py-4 rounded-none border border-zinc-800 bg-black text-white focus:ring-1 focus:ring-yellow-400 focus:border-yellow-400 outline-none transition-all placeholder:text-zinc-700">
                        @error('slug') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
                    </div> -->
                </div>

                <div>
                    <label class="block text-[10px] font-black text-zinc-500 mb-2 uppercase tracking-[0.2em]">Craftsmanship Description</label>
                    <textarea rows="6" name="description" placeholder="Detail the movement, crystal, and materials..."
                        class="w-full px-5 py-4 rounded-none border border-zinc-800 bg-black text-white focus:ring-1 focus:ring-yellow-400 focus:border-yellow-400 outline-none transition-all resize-none placeholder:text-zinc-700">{{ old('description') }}</textarea>
                    @error('description') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
                </div>
            </div>
        </div>

        <div class="bg-zinc-900 p-8 rounded-none border border-white/5 relative shadow-2xl">
            <div class="absolute top-0 left-0 w-full h-[2px] bg-yellow-400"></div>
            <h2 class="text-lg font-black text-white mb-8 uppercase tracking-widest flex items-center gap-3">
                <span class="text-yellow-400 text-2xl">02</span> Technical Specs & Pricing
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div>
                    <label class="block text-[10px] font-black text-zinc-500 mb-2 uppercase tracking-[0.2em]">Case Material</label>
                    <input type="text" name="case_material" value="{{ old('case_material', 'Steel') }}"
                        class="w-full px-5 py-4 rounded-none border border-zinc-800 bg-black text-white focus:ring-1 focus:ring-yellow-400 outline-none transition-all">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-zinc-500 mb-2 uppercase tracking-[0.2em]">Movement</label>
                    <select name="movement_type" class="w-full px-5 py-4 rounded-none border border-zinc-800 bg-black text-white focus:ring-1 focus:ring-yellow-400 outline-none transition-all">
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                        <option value="Quartz">Quartz</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-[10px] font-black text-zinc-500 mb-2 uppercase tracking-[0.2em]">Retail Price</label>
                    <div class="relative">
                        <span class="absolute left-5 top-4 text-yellow-400 font-bold">$</span>
                        <input type="number" name="price" step="0.01" value="{{ old('price') }}" placeholder="0.00"
                            class="w-full pl-10 pr-5 py-4 rounded-none border border-zinc-800 bg-black text-white focus:ring-1 focus:ring-yellow-400 outline-none transition-all font-mono">
                    </div>
                    @error('price') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label class="block text-[10px] font-black text-zinc-500 mb-2 uppercase tracking-[0.2em]">Water Resistance</label>
                    <input type="text" name="water_resistance" value="{{ old('water_resistance', '100M') }}"
                        class="w-full px-5 py-4 rounded-none border border-zinc-800 bg-black text-white focus:ring-1 focus:ring-yellow-400 outline-none transition-all font-mono">
                </div>
            </div>
        </div>
    </div>

    <div class="space-y-10">
        <div class="bg-zinc-900 p-6 rounded-none border border-white/5 shadow-2xl">
            <h3 class="text-[10px] font-black text-zinc-500 uppercase tracking-[0.2em] mb-5">Visual Assets</h3>
            <div class="group relative flex flex-col items-center justify-center w-full h-72 border border-zinc-800 bg-black hover:border-yellow-400/50 transition-all cursor-pointer">
                <div class="flex flex-col items-center justify-center p-6 text-center">
                    <div class="w-12 h-12 border border-yellow-400/30 text-yellow-400 flex items-center justify-center mb-4 group-hover:bg-yellow-400 group-hover:text-black transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"></path></svg>
                    </div>
                    <p class="text-[10px] text-white font-black uppercase tracking-widest">Upload Master Image</p>
                </div>
                <input type="file" name="image_url" class="absolute inset-0 opacity-0 cursor-pointer" />
            </div>
            @error('image_url') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
        </div>

        <div class="bg-zinc-900 p-6 rounded-none border border-white/5 shadow-2xl">
            <h3 class="text-[10px] font-black text-zinc-500 uppercase tracking-[0.2em] mb-5">Classification</h3>
            <div>
                <label class="block text-[10px] font-black text-zinc-500 uppercase tracking-widest mb-3">Market Visibility</label>
                <div class="grid grid-cols-2 gap-px bg-zinc-800 border border-zinc-800">
                    <label class="flex items-center justify-center p-3 bg-black cursor-pointer hover:bg-zinc-900 has-[:checked]:bg-yellow-400 has-[:checked]:text-black text-white transition-all group">
                        <input type="radio" name="is_active" value="1" {{ old('is_active', '1') == '1' ? 'checked' : '' }} class="hidden">
                        <span class="text-[10px] font-black uppercase tracking-widest">Active</span>
                    </label>
                    <label class="flex items-center justify-center p-3 bg-black cursor-pointer hover:bg-zinc-900 has-[:checked]:bg-yellow-400 has-[:checked]:text-black text-white transition-all group">
                        <input type="radio" name="is_active" value="0" {{ old('is_active') == '0' ? 'checked' : '' }} class="hidden">
                        <span class="text-[10px] font-black uppercase tracking-widest">Private</span>
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="w-full bg-yellow-400 p-8 rounded-none text-black shadow-[0_20px_40px_rgba(250,204,21,0.15)] hover:bg-yellow-500 transition-colors">
            <h4 class="font-black text-xl uppercase tracking-tighter italic">Register Timepiece</h4>
            <p class="text-black/70 text-[10px] font-bold uppercase tracking-widest">Commit to official catalog</p>
        </button>
    </div>
</form>
        </div>
    </div>
</x-layouts.adminlayout>