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
<body class="bg-stone-950 text-stone-100 font-sans selection:bg-amber-500/30">

    <main class="relative min-h-screen flex items-center justify-center bg-stone-950 px-6 pt-40 lg:pt-0 overflow-hidden">
        
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-amber-600/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-full h-[1px] bg-gradient-to-r from-transparent via-white/5 to-transparent"></div>

        <div class="relative w-full max-w-md animate-reveal">
            
            <header class="text-center mb-12">
                <div class="flex justify-center items-center space-x-3 mb-6">
                    <span class="h-px w-6 bg-amber-500/40"></span>
                    <span class="text-amber-500 text-[10px] tracking-[0.6em] uppercase font-bold">Access Restoration</span>
                    <span class="h-px w-6 bg-amber-500/40"></span>
                </div>
                <h1 class="text-5xl font-light uppercase tracking-tighter text-white mb-6">
                    Identity <br>
                    <span class="italic font-serif text-stone-500">Recovery</span>
                </h1>
                <p class="text-stone-500 text-[13px] font-light leading-relaxed px-4">
                    {{ __('Provide the email address associated with your anthology profile. We will dispatch a secure link to reset your access key.') }}
                </p>
            </header>

            @if (session('status'))
                <div class="mb-8 p-4 bg-amber-500/10 border border-amber-500/20 text-amber-500 text-[11px] uppercase tracking-widest text-center animate-pulse">
                    {{ session('status') }}
                </div>
            @endif

            <div class="bg-stone-900/30 backdrop-blur-2xl border border-white/5 p-8 md:p-12 shadow-3xl">
                <form method="POST" action="{{ route('password.email') }}" class="space-y-10">
                    @csrf

                    <div class="group">
                        <label for="email" class="block text-[10px] uppercase tracking-[0.4em] text-stone-600 mb-3 group-focus-within:text-amber-500 transition-colors">
                            {{ __('Registered Email') }}
                        </label>
                        
                        <input id="email" 
                               type="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               autofocus
                               class="w-full bg-stone-950/40 border-b border-white/10 rounded-none py-4 text-white placeholder-stone-800 focus:outline-none focus:border-amber-500 transition-all duration-700 tracking-wide"
                               placeholder="CHRONOS@ONYX.COM" />

                        <x-input-error :messages="$errors->get('email')" class="mt-4 text-[10px] uppercase tracking-widest text-red-500/70" />
                    </div>

                    <div class="flex flex-col space-y-6">
                        <button type="submit" class="w-full bg-white text-black py-6 text-[11px] uppercase tracking-[0.5em] font-bold hover:bg-amber-600 hover:text-white transition-all duration-700 active:scale-[0.97] shadow-xl">
                            {{ __('Dispatch Link') }}
                        </button>
                        
                        <a href="{{ route('login') }}" class="flex items-center justify-center space-x-4 text-[10px] uppercase tracking-[0.4em] text-stone-600 hover:text-white transition-all group">
                            <span class="h-px w-4 bg-stone-800 group-hover:bg-amber-500 transition-all"></span>
                            <span>Return to Login</span>
                        </a>
                    </div>
                </form>
            </div>

            <div class="mt-16 text-center">
                <span class="text-[8px] uppercase tracking-[0.8em] text-stone-700 font-medium">Secured by Horologos Systems</span>
            </div>
        </div>
    </main>
</body>
</html>  

