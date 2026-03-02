


<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horologos | Timeless Precision</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <style>
        @keyframes reveal {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-reveal {
            animation: reveal 1.2s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        }
    </style>
</head>
<body class="bg-stone-950 text-stone-100 font-sans selection:bg-amber-500/30">
      <main class="relative min-h-screen flex items-center justify-center bg-stone-950 px-6 pt-40 lg:pt-0">
        
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-600/5 rounded-full blur-[120px]"></div>
        </div>

        <div class="relative w-full max-w-md animate-reveal">
            
            <header class="text-center mb-10">
                <div class="flex justify-center items-center space-x-2 mb-4">
                    <span class="h-[1px] w-8 bg-amber-500/50"></span>
                    <span class="text-amber-500 text-[10px] tracking-[0.5em] uppercase font-bold">Security Protocol</span>
                    <span class="h-[1px] w-8 bg-amber-500/50"></span>
                </div>
                <h1 class="text-4xl font-light uppercase tracking-tighter text-white mb-4">
                    Confirm <span class="italic font-serif text-stone-500">Identity</span>
                </h1>
                <p class="text-stone-500 text-sm font-light leading-relaxed">
                    {{ __('This is a secure area of the anthology. Please verify your credentials to proceed with the Onyx Edition acquisition.') }}
                </p>
            </header>

            <div class="bg-stone-900/40 backdrop-blur-xl border border-white/5 p-8 md:p-10 shadow-2xl">
                <form method="POST" action="{{ route('password.confirm') }}" class="space-y-8">
                    @csrf

                    <div class="group">
                        <label for="password" class="block text-[10px] uppercase tracking-[0.3em] text-stone-500 mb-2 group-focus-within:text-amber-500 transition-colors">
                            {{ __('Access Key') }}
                        </label>
                        
                        <input id="password" 
                               type="password" 
                               name="password" 
                               required 
                               autocomplete="current-password"
                               class="w-full bg-stone-950/50 border border-white/10 rounded-none py-4 px-4 text-white placeholder-stone-700 focus:outline-none focus:border-amber-500/50 focus:ring-1 focus:ring-amber-500/20 transition-all duration-500 font-mono tracking-widest"
                               placeholder="••••••••" />

                        <x-input-error :messages="$errors->get('password')" class="mt-3 text-[10px] uppercase tracking-widest text-red-500/80" />
                    </div>

                    <div class="flex flex-col space-y-4">
                        <button type="submit" class="w-full bg-white text-black py-5 text-[11px] uppercase tracking-[0.4em] font-bold hover:bg-amber-600 hover:text-white transition-all duration-700 active:scale-[0.98]">
                            {{ __('Verify Access') }}
                        </button>
                        
                        <a href="{{ url()->previous() }}" class="text-center text-[9px] uppercase tracking-[0.4em] text-stone-600 hover:text-stone-400 transition-colors py-2">
                            {{ __('Cancel Request') }}
                        </a>
                    </div>
                </form>
            </div>

            <div class="mt-12 flex justify-center opacity-20">
                <div class="flex items-center space-x-4">
                    <div class="h-[1px] w-4 bg-stone-500"></div>
                    <span class="text-[8px] uppercase tracking-[0.5em] text-stone-300">Horologos Encryption Active</span>
                    <div class="h-[1px] w-4 bg-stone-500"></div>
                </div>
            </div>
        </div>
    </main>

</body>
</html> 