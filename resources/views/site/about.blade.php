<x-layouts.mainlayout>
<section class="relative h-[70vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-black/60 z-10"></div>
            <div class="w-full h-full bg-[url('https://images.unsplash.com/photo-1580657018950-c7f7d6a6d990?q=80&w=2070')] bg-cover bg-center animate-slow-zoom"></div>
        </div>
        
        <div class="relative z-20 text-center load-in">
            <span class="text-amber-500 text-xs tracking-[0.6em] uppercase mb-6 block">Since 1894</span>
            <h1 class="text-6xl md:text-8xl font-light tracking-tighter">Beyond <span class="italic font-serif">Seconds</span></h1>
        </div>
    </section>

    <section class="py-32 px-6 md:px-24">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-20 items-center">
            <div class="space-y-8">
                <h2 class="text-3xl font-light tracking-tight text-white uppercase">The Pursuit of <br>Absolute Permanence</h2>
                <p class="text-stone-400 leading-relaxed text-sm md:text-base">
                    Founded in the Jura Mountains of Switzerland, Horologos was born from a singular obsession: to create a timepiece that outlasts its wearer. We don't just build watches; we engineer mechanical legacies.
                </p>
                <p class="text-stone-400 leading-relaxed text-sm">
                    In an era of planned obsolescence, we stand as a "Resistor." We resist the temporary. We resist the fragile. Every gear, spring, and screw is treated as a work of structural art.
                </p>
            </div>
            <div class="relative group">
                <div class="absolute -inset-4 border border-amber-500/20 translate-x-4 translate-y-4 group-hover:translate-x-2 group-hover:translate-y-2 transition-transform duration-700"></div>
                <div class="aspect-[4/5] bg-stone-900 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1614164185128-e4ec99c436d7?q=80&w=1974" alt="Watch Movement" class="w-full h-full object-cover grayscale hover:grayscale-0 transition duration-1000">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-stone-900/50 py-24 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div>
                <span class="block text-4xl font-light text-amber-500 mb-2">130</span>
                <span class="text-[10px] uppercase tracking-[0.3em] text-stone-500">Years of History</span>
            </div>
            <div>
                <span class="block text-4xl font-light text-amber-500 mb-2">248</span>
                <span class="text-[10px] uppercase tracking-[0.3em] text-stone-500">Caliber Parts</span>
            </div>
            <div>
                <span class="block text-4xl font-light text-amber-500 mb-2">400h</span>
                <span class="text-[10px] uppercase tracking-[0.3em] text-stone-500">Pressure Testing</span>
            </div>
            <div>
                <span class="block text-4xl font-light text-amber-500 mb-2">0.02</span>
                <span class="text-[10px] uppercase tracking-[0.3em] text-stone-500">Micron Tolerance</span>
            </div>
        </div>
    </section>

    <section class="py-32 px-6">
        <div class="max-w-7xl mx-auto flex flex-col items-center">
            <h2 class="text-center text-4xl font-serif italic mb-20 text-white">The Artisan's Touch</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full">
                <div class="bg-stone-900 p-10 border border-white/5 hover:border-amber-500/40 transition duration-500">
                    <h3 class="text-amber-500 text-xs tracking-widest uppercase mb-4">Phase 01</h3>
                    <h4 class="text-xl mb-4 font-light">The Forging</h4>
                    <p class="text-stone-500 text-xs leading-loose">We use 904L stainless steel and Grade 5 Titanium, forged at extreme temperatures to ensure the "Resistor" casing is virtually indestructible.</p>
                </div>
                <div class="bg-stone-900 p-10 border border-white/5 hover:border-amber-500/40 transition duration-500 md:-translate-y-8">
                    <h3 class="text-amber-500 text-xs tracking-widest uppercase mb-4">Phase 02</h3>
                    <h4 class="text-xl mb-4 font-light">The Heartbeat</h4>
                    <p class="text-stone-500 text-xs leading-loose">The assembly of the balance wheel. A task so delicate that it is performed only by master horologists with over 15 years of experience.</p>
                </div>
                <div class="bg-stone-900 p-10 border border-white/5 hover:border-amber-500/40 transition duration-500">
                    <h3 class="text-amber-500 text-xs tracking-widest uppercase mb-4">Phase 03</h3>
                    <h4 class="text-xl mb-4 font-light">The Certification</h4>
                    <p class="text-stone-500 text-xs leading-loose">Every watch is monitored for 15 days in 5 different positions to guarantee a deviation of no more than -2/+2 seconds per day.</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.mainlayout>
