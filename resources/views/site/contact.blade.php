<x-layouts.mainlayout>
<main class="min-h-screen flex items-center justify-center pt-24 pb-12 px-6">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-600/5 rounded-full blur-[120px]"></div>
        
        <div class="max-w-6xl w-full grid md:grid-cols-2 gap-0 border border-white/5 bg-stone-900/20 backdrop-blur-sm animate-fade">
            
            <div class="p-8 md:p-16 border-r border-white/5">
                <h1 class="text-4xl font-light tracking-tight mb-2 uppercase">Contact <span class="italic font-serif">Concierge</span></h1>
                <p class="text-stone-500 text-sm mb-10 tracking-wide font-light">Available 24/7 for private inquiries and technical support.</p>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] uppercase tracking-[0.2em] text-stone-400">First Name</label>
                            <input type="text" class="w-full bg-white/5 border border-white/10 p-3 text-sm outline-none transition-all input-gold focus:bg-stone-800" placeholder="John">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] uppercase tracking-[0.2em] text-stone-400">Last Name</label>
                            <input type="text" class="w-full bg-white/5 border border-white/10 p-3 text-sm outline-none transition-all input-gold focus:bg-stone-800" placeholder="Doe">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-[0.2em] text-stone-400">Email Address</label>
                        <input type="email" class="w-full bg-white/5 border border-white/10 p-3 text-sm outline-none transition-all input-gold focus:bg-stone-800" placeholder="john@example.com">
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-[0.2em] text-stone-400">Inquiry Type</label>
                        <select class="w-full bg-white/5 border border-white/10 p-3 text-sm outline-none transition-all input-gold focus:bg-stone-800 text-stone-400">
                            <option>Private Acquisition</option>
                            <option>Technical Service</option>
                            <option>Heritage Authentication</option>
                            <option>Media Inquiry</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-[0.2em] text-stone-400">Message</label>
                        <textarea rows="4" class="w-full bg-white/5 border border-white/10 p-3 text-sm outline-none transition-all input-gold focus:bg-stone-800" placeholder="How may we assist you?"></textarea>
                    </div>

                    <button class="w-full py-4 bg-amber-600 text-white text-[11px] uppercase tracking-[0.3em] font-bold hover:bg-amber-500 transition-all duration-500">
                        Submit Inquiry
                    </button>
                </form>
            </div>

            <div class="relative hidden md:flex flex-col justify-between p-16 bg-[url('https://images.unsplash.com/photo-1509048191080-d2984bad6ad5?q=80&w=1964')] bg-cover bg-center">
                <div class="absolute inset-0 bg-stone-950/80"></div>
                
                <div class="relative z-10">
                    <h2 class="text-xs uppercase tracking-[0.4em] text-amber-500 mb-8">Global Boutiques</h2>
                    
                    <div class="space-y-8">
                        <div>
                            <h4 class="text-white text-sm uppercase tracking-widest font-bold">Geneva</h4>
                            <p class="text-stone-400 text-xs mt-2 font-light leading-loose">Rue de la Corraterie 12<br>1204 Genève, Switzerland</p>
                        </div>
                        <div>
                            <h4 class="text-white text-sm uppercase tracking-widest font-bold">New York</h4>
                            <p class="text-stone-400 text-xs mt-2 font-light leading-loose">711 Fifth Avenue<br>New York, NY 10022</p>
                        </div>
                        <div>
                            <h4 class="text-white text-sm uppercase tracking-widest font-bold">Tokyo</h4>
                            <p class="text-stone-400 text-xs mt-2 font-light leading-loose">7-9-11 Ginza, Chuo-ku<br>Tokyo 104-0061</p>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 pt-12 border-t border-white/10 mt-12">
                    <p class="text-stone-500 text-[10px] tracking-widest uppercase mb-4 italic">"Time is the ultimate luxury. We respect yours."</p>
                    <div class="flex space-x-6">
                        <span class="text-white text-xs">+41 22 123 4567</span>
                        <span class="text-white text-xs">concierge@horologos.ch</span>
                    </div>
                </div>
            </div>

        </div>
    </main>    
</x-layouts.mainlayout>