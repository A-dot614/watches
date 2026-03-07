<x-layouts.adminlayout>
 <style>
        .font-nexo { font-family: 'Nexo Kora',sans-serif; }
    </style>

    <div class="p-8 bg-stone-950 min-h-screen w-full font-nexo overflow-y-auto">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16 border-b border-white/5 pb-10">
            <div class="space-y-2">
                <h2 class="text-xs uppercase tracking-[0.8em] text-amber-500 font-bold">Collector Dashboard</h2>
                <h3 class="text-5xl font-light text-white uppercase tracking-tighter leading-none">
                    Welcome, <span class="italic font-serif text-amber-600">Connoisseur</span>
                </h3>
                <p class="text-stone-500 text-xs tracking-[0.2em] uppercase">Ref. System Status: Optimal / {{ now()->format('d M Y') }}</p>
            </div>
            
            <div class="flex gap-4">
                <div class="text-right px-6 border-r border-white/10">
                    <p class="text-[10px] text-stone-500 uppercase tracking-widest">Total Valuation</p>
                    <p class="text-xl text-white font-serif">$142,800.00</p>
                </div>
                <div class="text-right">
                    <p class="text-[10px] text-stone-500 uppercase tracking-widest">Active Pieces</p>
                    <p class="text-xl text-white font-serif">12</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <a href="/inventory" class="group relative p-8 bg-stone-900 border border-white/5 hover:border-amber-500/50 transition-all duration-700">
                <div class="absolute top-4 right-4 text-stone-800 group-hover:text-amber-500/20 transition-colors">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </div>
                <h4 class="text-amber-500 text-[10px] uppercase tracking-[0.4em] mb-4">Management</h4>
                <p class="text-white text-xl uppercase tracking-widest mb-2">Vault Inventory</p>
                <p class="text-stone-500 text-xs font-light">Audit, edit, and organize your current collection pieces.</p>
                <div class="mt-6 inline-block text-[10px] text-white border-b border-amber-500 pb-1 uppercase tracking-widest group-hover:tracking-[0.3em] transition-all">Enter Vault</div>
            </a>

            <a href="/market" class="group relative p-8 bg-stone-900 border border-white/5 hover:border-amber-500/50 transition-all duration-700">
                <div class="absolute top-4 right-4 text-stone-800 group-hover:text-amber-500/20 transition-colors">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6h-6z"/></svg>
                </div>
                <h4 class="text-amber-500 text-[10px] uppercase tracking-[0.4em] mb-4">Intelligence</h4>
                <p class="text-white text-xl uppercase tracking-widest mb-2">Market Trends</p>
                <p class="text-stone-500 text-xs font-light">Real-time valuation shifts and horological market data.</p>
                <div class="mt-6 inline-block text-[10px] text-white border-b border-amber-500 pb-1 uppercase tracking-widest group-hover:tracking-[0.3em] transition-all">View Trends</div>
            </a>

            <a href="/inquiries" class="group relative p-8 bg-stone-900 border border-white/5 hover:border-amber-500/50 transition-all duration-700">
                <div class="absolute top-4 right-4 text-stone-800 group-hover:text-amber-500/20 transition-colors">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
                </div>
                <h4 class="text-amber-500 text-[10px] uppercase tracking-[0.4em] mb-4">Communication</h4>
                <p class="text-white text-xl uppercase tracking-widest mb-2">Client Leads</p>
                <p class="text-stone-500 text-xs font-light">Manage inquiries regarding pieces in your curated collection.</p>
                <div class="mt-6 inline-block text-[10px] text-white border-b border-amber-500 pb-1 uppercase tracking-widest group-hover:tracking-[0.3em] transition-all">Open Inbox</div>
            </a>
        </div>

        <div class="bg-stone-900/50 border border-white/5 p-8 mb-12">
            <h4 class="text-white text-xs uppercase tracking-[0.5em] mb-8 border-b border-white/5 pb-4">Recent Acquisitions</h4>
            <div class="space-y-6">
                <div class="flex items-center justify-between group">
                    <div class="flex items-center space-x-6">
                        <span class="text-stone-700 font-serif italic text-lg group-hover:text-amber-500 transition-colors">01</span>
                        <div>
                            <p class="text-white text-sm uppercase tracking-wider">Submariner "Hulk"</p>
                            <p class="text-[9px] text-stone-500 uppercase tracking-widest">Added 2 hours ago</p>
                        </div>
                    </div>
                    <span class="text-stone-400 text-[10px] uppercase tracking-widest">Processing...</span>
                </div>

                <div class="flex items-center justify-between group">
                    <div class="flex items-center space-x-6">
                        <span class="text-stone-700 font-serif italic text-lg group-hover:text-amber-500 transition-colors">02</span>
                        <div>
                            <p class="text-white text-sm uppercase tracking-wider">Royal Oak 15500ST</p>
                            <p class="text-[9px] text-stone-500 uppercase tracking-widest">Added 1 day ago</p>
                        </div>
                    </div>
                    <span class="text-emerald-500 text-[10px] uppercase tracking-widest">Verified</span>
                </div>
            </div>
        </div>
    </div>
</x-layouts.adminlayout>    