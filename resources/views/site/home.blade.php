<x-layouts.mainlayout>
    <section class="relative h-screen flex flex-col items-center justify-center overflow-hidden pt-20">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-600/10 rounded-full blur-[120px] animate-glow"></div>

        <div class="relative z-10 text-center px-4 mb-12">
            <span class="block text-amber-500 text-xs tracking-[0.5em] uppercase mb-4 animate-fade-up">Est. 1894 | Swiss Made</span>
            <h1 class="text-5xl md:text-8xl font-light tracking-tight mb-6 animate-fade-up" style="animation-delay: 0.2s;">
                The Apex of <span class="italic font-serif">Time</span>
            </h1>
            <p class="text-stone-400 max-w-xl mx-auto mb-10 text-sm md:text-base leading-relaxed animate-fade-up" style="animation-delay: 0.4s;">
                A symphony of 248 hand-finished components, engineered to endure the harshest elements while maintaining surgical precision.
            </p>
        </div>

        <div class="relative z-10 animate-float">
            <div class="w-64 h-96 bg-gradient-to-b from-stone-800 to-stone-900 rounded-full flex items-center justify-center border border-white/10 shadow-2xl overflow-hidden relative group">
                <div class="absolute inset-0 bg-amber-500/5 group-hover:bg-amber-500/10 transition-colors"></div>
                <span class="text-stone-500 text-[10px] uppercase tracking-widest">Watch Visual</span>
            </div>
        </div>
    </section>

    <section id="specs" class="py-32 px-6 md:px-12 bg-stone-900/30">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            
            <div class="space-y-8">
                <h2 class="text-4xl font-light leading-tight">Mastering the <br><span class="text-amber-500 font-serif italic">Resistor Series</span></h2>
                <p class="text-stone-400 leading-relaxed">
                    Designed for the modern explorer, the **Resistor Series** introduces our most durable casing yet. Each piece undergoes 400 hours of stress testing to ensure performance at depths of 300 meters and extreme temperatures.
                </p>
                
                <div class="grid grid-cols-2 gap-8 pt-4">
                    <div class="border-l border-amber-500/30 pl-4">
                        <h4 class="text-white text-xs uppercase tracking-widest mb-2 font-bold">Movement</h4>
                        <p class="text-stone-500 text-sm italic">Automatic Caliber H-26</p>
                    </div>
                    <div class="border-l border-amber-500/30 pl-4">
                        <h4 class="text-white text-xs uppercase tracking-widest mb-2 font-bold">Material</h4>
                        <p class="text-stone-500 text-sm italic">Grade 5 Titanium</p>
                    </div>
                    <div class="border-l border-amber-500/30 pl-4">
                        <h4 class="text-white text-xs uppercase tracking-widest mb-2 font-bold">Glass</h4>
                        <p class="text-stone-500 text-sm italic">Anti-Reflective Sapphire</p>
                    </div>
                    <div class="border-l border-amber-500/30 pl-4">
                        <h4 class="text-white text-xs uppercase tracking-widest mb-2 font-bold">Power</h4>
                        <p class="text-stone-500 text-sm italic">80-Hour Reserve</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="aspect-square bg-stone-800/50 rounded-2xl border border-white/5 flex items-center justify-center group overflow-hidden">
                    <div class="p-12 text-center group-hover:scale-105 transition duration-700">
                        <h3 class="text-stone-300 font-serif italic text-2xl mb-4">"Precision is the only luxury we cannot afford to lose."</h3>
                        <p class="text-amber-600 text-[10px] uppercase tracking-[0.4em]">— Marc-André, Lead Horologist</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layouts.mainlayout>