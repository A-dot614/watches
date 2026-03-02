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
            <div class="absolute w-[600px] h-[600px] bg-amber-600/5 rounded-full blur-[150px] animate-pulse"></div>
            
            <div class="relative z-10 px-24 space-y-8">
                <div class="flex items-center space-x-3 opacity-50">
                    <span class="h-px w-12 bg-amber-500"></span>
                    <span class="text-[10px] uppercase tracking-[1em] text-white font-bold">Resistor Series</span>
                </div>
                <h2 class="text-7xl font-light uppercase tracking-tighter text-white leading-[0.85]">
                    Begin Your <br> 
                    <span class="italic font-serif text-stone-500 text-6xl">Legacy</span>
                </h2>
                <p class="text-stone-500 text-sm font-light leading-relaxed max-w-xs">
                    Join the Horologos Anthology to receive priority access to limited releases and secure your place in horological history.
                </p>
            </div>

            <div class="absolute top-0 right-0 p-12 opacity-10">
                <span class="text-[12rem] font-serif italic leading-none">H</span>
            </div>
        </div>

        <div class="flex flex-col justify-center px-8 md:px-20 lg:px-32 relative custom-scrollbar overflow-y-auto py-12">
            
            <div class="max-w-md w-full mx-auto animate-reveal">
                
                <header class="mb-12">
                    <h1 class="text-4xl font-light uppercase tracking-tighter text-white mb-4">Create <span class="italic font-serif text-stone-500">Profile</span></h1>
                    <p class="text-stone-500 text-[11px] uppercase tracking-[0.3em] leading-relaxed">Initialize your credentials for the secure portal.</p>
                </header>

                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <div class="group">
                        <label for="name" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-2 group-focus-within:text-amber-500 transition-colors">
                            {{ __('Full Name') }}
                        </label>
                        <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                               class="w-full bg-stone-900/30 border border-white/5 rounded-none py-4 px-4 text-white placeholder-stone-800 focus:outline-none focus:border-amber-500/50 transition-all duration-500"
                               placeholder="ELIAS CHRONOS" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-[10px] uppercase tracking-widest text-red-500/80" />
                    </div>

                    <div class="group">
                        <label for="email" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-2 group-focus-within:text-amber-500 transition-colors">
                            {{ __('Electronic Mail') }}
                        </label>
                        <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                               class="w-full bg-stone-900/30 border border-white/5 rounded-none py-4 px-4 text-white placeholder-stone-800 focus:outline-none focus:border-amber-500/50 transition-all duration-500"
                               placeholder="CHRONOS@ONYX.COM" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-[10px] uppercase tracking-widest text-red-500/80" />
                    </div>

                    <div class="group">
                        <label for="password" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-2 group-focus-within:text-amber-500 transition-colors">
                            {{ __('Define Access Key') }}
                        </label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                               class="w-full bg-stone-900/30 border border-white/5 rounded-none py-4 px-4 text-white placeholder-stone-800 focus:outline-none focus:border-amber-500/50 transition-all duration-500"
                               placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-[10px] uppercase tracking-widest text-red-500/80" />
                    </div>

                    <div class="group">
                        <label for="password_confirmation" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-2 group-focus-within:text-amber-500 transition-colors">
                            {{ __('Verify Access Key') }}
                        </label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                               class="w-full bg-stone-900/30 border border-white/5 rounded-none py-4 px-4 text-white placeholder-stone-800 focus:outline-none focus:border-amber-500/50 transition-all duration-500"
                               placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-[10px] uppercase tracking-widest text-red-500/80" />
                    </div>

                    <div class="flex flex-col space-y-6 pt-4">
                        <button type="submit" class="w-full bg-white text-black py-6 text-[11px] uppercase tracking-[0.5em] font-bold hover:bg-amber-600 hover:text-white transition-all duration-700 active:scale-[0.98] shadow-2xl">
                            {{ __('Complete Enrollment') }}
                        </button>
                        
                        <a class="text-center text-[9px] uppercase tracking-[0.4em] text-stone-600 hover:text-white transition-colors" href="{{ route('login') }}">
                            {{ __('Already a Member?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>
</html>    