<x-layouts.adminlayout>
<div class="reveal reveal-1.5 space-y-8 mb-16">
    <div class="flex items-center justify-between border-b border-white/5 pb-4">
        <h3 class="text-[10px] uppercase tracking-[0.5em] text-stone-500">Portfolio Performance</h3>
        <div class="flex items-center space-x-6 text-[9px] uppercase tracking-widest text-stone-600 font-mono">
            <span class="flex items-center"><span class="w-2 h-2 bg-amber-500 rounded-full mr-2"></span> Market Value</span>
            <span class="flex items-center"><span class="w-2 h-2 bg-stone-800 rounded-full mr-2"></span> Acquisition Cost</span>
        </div>
    </div>

    <div class="relative h-64 w-full bg-stone-900/10 border border-white/5 p-8 group overflow-hidden">
        <div class="absolute inset-0 flex flex-col justify-between p-8 opacity-20 pointer-events-none">
            <div class="border-t border-white/10 w-full"></div>
            <div class="border-t border-white/10 w-full"></div>
            <div class="border-t border-white/10 w-full"></div>
            <div class="border-t border-white/10 w-full"></div>
        </div>

        <svg viewBox="0 0 1000 200" class="w-full h-full preserve-3d">
            <defs>
                <linearGradient id="graphGradient" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="rgba(245, 158, 11, 0.15)" />
                    <stop offset="100%" stop-color="rgba(245, 158, 11, 0)" />
                </linearGradient>
            </defs>

            <path d="M0,200 L0,150 C100,140 200,170 300,120 C400,70 500,100 600,60 C700,20 800,80 900,40 L1000,30 L1000,200 Z" 
                  fill="url(#graphGradient)" />

            <path d="M0,150 C100,140 200,170 300,120 C400,70 500,100 600,60 C700,20 800,80 900,40 L1000,30" 
                  fill="none" 
                  stroke="#f59e0b" 
                  stroke-width="1.5" 
                  class="graph-path" />
            
            <path d="M0,180 L1000,180" stroke="white" stroke-width="0.5" stroke-dasharray="4" opacity="0.1" />

            <g transform="translate(1000, 30)">
                <circle r="4" fill="#f59e0b">
                    <animate attributeName="r" values="3;6;3" dur="2s" repeatCount="indefinite" />
                    <animate attributeName="opacity" values="1;0.5;1" dur="2s" repeatCount="indefinite" />
                </circle>
            </g>
        </svg>

        <div class="absolute bottom-2 left-8 right-8 flex justify-between text-[7px] font-mono uppercase text-stone-700 tracking-[0.3em]">
            <span>SEP</span>
            <span>OCT</span>
            <span>NOV</span>
            <span>DEC</span>
            <span>JAN</span>
            <span>FEB</span>
        </div>
    </div>
</div>

<style>
    /* Add to your existing <style> block */
    .graph-path {
        stroke-dasharray: 1200;
        stroke-dashoffset: 1200;
        animation: drawGraph 3s ease-out forwards;
        animation-delay: 2.5s; /* Wait for preloader */
    }

    @keyframes drawGraph {
        to { stroke-dashoffset: 0; }
    }


</style>
</x-layouts.adminlayout>    