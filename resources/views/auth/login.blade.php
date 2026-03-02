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
            animation: reveal 1.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</head>    
<body class="bg-stone-950 text-stone-100 font-sans selection:bg-amber-500/30">

<main class="relative min-h-screen grid grid-cols-1 lg:grid-cols-2 bg-stone-950 pt-40 lg:pt-0 overflow-hidden">
        
        <div class="hidden lg:flex relative bg-stone-900 items-center justify-center border-r border-white/5 overflow-hidden">
            <div class="absolute w-[500px] h-[500px] bg-amber-600/5 rounded-full blur-[120px]"></div>
            
            <div class="relative z-10 text-center space-y-6">
                <div class="flex justify-center items-center space-x-3 opacity-50">
                    <span class="h-px w-8 bg-amber-500"></span>
                    <span class="text-[10px] uppercase tracking-[0.8em] text-white font-bold">Horologos Anthology</span>
                    <span class="h-px w-8 bg-amber-500"></span>
                </div>
                <h2 class="text-6xl font-light uppercase tracking-tighter text-white leading-none">
                    Private <br> 
                    <span class="italic font-serif text-stone-500 text-5xl">Access</span>
                </h2>
            </div>

            <div class="absolute bottom-12 left-12 h-20 w-[1px] bg-gradient-to-t from-amber-500/40 to-transparent"></div>
            <div class="absolute bottom-12 left-12 w-20 h-[1px] bg-gradient-to-r from-amber-500/40 to-transparent"></div>
        </div>

        <div class="flex flex-col justify-center px-8 md:px-20 lg:px-32 relative">
            
            <div class="max-w-md w-full mx-auto animate-reveal">
                
                <header class="mb-12">
                    <h1 class="text-4xl font-light uppercase tracking-tighter text-white mb-4">Identity <span class="italic font-serif text-stone-500">Authentication</span></h1>
                    <p class="text-stone-500 text-[11px] uppercase tracking-[0.3em] leading-relaxed">Enter your credentials to manage your collection.</p>
                </header>

                <x-auth-session-status class="mb-8 p-4 bg-amber-500/10 border border-amber-500/20 text-amber-500 text-[11px] uppercase tracking-widest text-center" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-8">
                    @csrf

                    <div class="group">
                        <label for="email" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-2 group-focus-within:text-amber-500 transition-colors">
                            {{ __('Authorized Email') }}
                        </label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                               class="w-full bg-stone-900/30 border border-white/5 rounded-none py-4 px-4 text-white placeholder-stone-800 focus:outline-none focus:border-amber-500/50 transition-all duration-500"
                               placeholder="CHRONOS@ONYX.COM" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-[10px] uppercase tracking-widest text-red-500/80" />
                    </div>

                    <div class="group">
                        <div class="flex justify-between items-center mb-2">
                            <label for="password" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 group-focus-within:text-amber-500 transition-colors">
                                {{ __('Access Key') }}
                            </label>
                            @if (Route::has('password.request'))
                                <a class="text-[9px] uppercase tracking-[0.2em] text-stone-700 hover:text-amber-500 transition-colors" href="{{ route('password.request') }}">
                                    {{ __('Lost Access?') }}
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="w-full bg-stone-900/30 border border-white/5 rounded-none py-4 px-4 text-white placeholder-stone-800 focus:outline-none focus:border-amber-500/50 transition-all duration-500"
                               placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-[10px] uppercase tracking-widest text-red-500/80" />
                    </div>

                    <div class="flex items-center">
                        <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                            <input id="remember_me" type="checkbox" name="remember" 
                                   class="w-3 h-3 bg-stone-950 border-stone-800 text-amber-600 rounded-none focus:ring-offset-stone-950 focus:ring-amber-500">
                            <span class="ms-3 text-[10px] uppercase tracking-[0.3em] text-stone-600 group-hover:text-stone-400 transition-colors">{{ __('Maintain Session') }}</span>
                        </label>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-white text-black py-6 text-[11px] uppercase tracking-[0.5em] font-bold hover:bg-amber-600 hover:text-white transition-all duration-700 active:scale-[0.98] shadow-2xl">
                            {{ __('Unlock Anthology') }}
                        </button>
                    </div>
                </form>

                <footer class="mt-20 text-center lg:text-left">
                    <p class="text-[9px] uppercase tracking-[0.4em] text-stone-800">
                        Secure Transmission &copy; 2026 Horologos Engineering
                    </p>
                </footer>
            </div>
        </div>
    </main>
</body>
</html>