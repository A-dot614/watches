<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horologos | Timeless Precision</title>
    <script src="https://cdn.tailwindcss.com"></script>
 <style>
        @keyframes reveal {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-reveal {
            animation: reveal 1.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>

</head>    
<body class="bg-stone-950 text-stone-100 font-sans selection:bg-amber-500/30"></body>
    <main class="relative min-h-screen flex items-center justify-center bg-stone-950 px-6 pt-40 lg:pt-0 overflow-hidden">
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-amber-600/5 rounded-full blur-[150px] pointer-events-none"></div>

        <div class="relative w-full max-w-md animate-reveal">
            
            <header class="text-center mb-12">
                <div class="flex justify-center items-center space-x-3 mb-6">
                    <span class="h-px w-6 bg-amber-500/40"></span>
                    <span class="text-amber-500 text-[10px] tracking-[0.6em] uppercase font-bold">Security Override</span>
                    <span class="h-px w-6 bg-amber-500/40"></span>
                </div>
                <h1 class="text-5xl font-light uppercase tracking-tighter text-white mb-6">
                    New <br>
                    <span class="italic font-serif text-stone-500">Credentials</span>
                </h1>
                <p class="text-stone-500 text-[11px] uppercase tracking-[0.3em] leading-relaxed">
                    {{ __('Define your new access key to restore anthology privileges.') }}
                </p>
            </header>

            <div class="bg-stone-900/30 backdrop-blur-2xl border border-white/5 p-8 md:p-12 shadow-3xl relative">
                <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-amber-500/20 to-transparent"></div>

                <form method="POST" action="{{ route('password.store') }}" class="space-y-8">
                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="group">
                        <label for="email" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-2">
                            {{ __('Verified Identifier') }}
                        </label>
                        <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
                               class="w-full bg-transparent border-b border-white/10 py-4 text-stone-400 focus:outline-none cursor-not-allowed opacity-60 transition-all duration-700 tracking-wide" 
                               readonly />
                        <x-input-error :messages="$errors->get('email')" class="mt-4 text-[10px] uppercase tracking-widest text-red-500/70" />
                    </div>

                    <div class="group">
                        <label for="password" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-2 group-focus-within:text-amber-500 transition-colors">
                            {{ __('New Access Key') }}
                        </label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                               class="w-full bg-stone-950/40 border-b border-white/10 rounded-none py-4 text-white placeholder-stone-800 focus:outline-none focus:border-amber-500 transition-all duration-700 tracking-widest font-mono"
                               placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-4 text-[10px] uppercase tracking-widest text-red-500/70" />
                    </div>

                    <div class="group">
                        <label for="password_confirmation" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-2 group-focus-within:text-amber-500 transition-colors">
                            {{ __('Verify Key') }}
                        </label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                               class="w-full bg-stone-950/40 border-b border-white/10 rounded-none py-4 text-white placeholder-stone-800 focus:outline-none focus:border-amber-500 transition-all duration-700 tracking-widest font-mono"
                               placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-4 text-[10px] uppercase tracking-widest text-red-500/70" />
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full bg-white text-black py-6 text-[11px] uppercase tracking-[0.5em] font-bold hover:bg-amber-600 hover:text-white transition-all duration-700 active:scale-[0.98] shadow-2xl">
                            {{ __('Restore Access') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>
</html>    