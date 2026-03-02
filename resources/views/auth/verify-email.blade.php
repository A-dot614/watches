<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horologos | Timeless Precision</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes reveal {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-reveal {
            animation: reveal 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
        }
    </style>

</head>    
<body class="bg-stone-950 text-stone-100 font-sans selection:bg-amber-500/30"></body>

    <main class="relative min-h-screen flex items-center justify-center bg-stone-950 px-6 pt-40 lg:pt-0 overflow-hidden">
        
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-600/5 rounded-full blur-[150px]"></div>
        </div>

        <div class="relative w-full max-w-lg animate-reveal">
            
            <header class="text-center mb-12">
                <div class="flex justify-center items-center space-x-3 mb-6">
                    <span class="h-px w-8 bg-amber-500/40"></span>
                    <span class="text-amber-500 text-[10px] tracking-[0.6em] uppercase font-bold">Verification Required</span>
                    <span class="h-px w-8 bg-amber-500/40"></span>
                </div>
                <h1 class="text-5xl font-light uppercase tracking-tighter text-white mb-6">
                    Confirm <br>
                    <span class="italic font-serif text-stone-500">Registry</span>
                </h1>
                <p class="text-stone-500 text-[12px] uppercase tracking-[0.3em] leading-relaxed max-w-sm mx-auto">
                    {{ __('An authentication link has been dispatched. Please verify your electronic mail to activate your anthology profile.') }}
                </p>
            </header>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-10 p-5 bg-amber-500/10 border border-amber-500/20 text-amber-500 text-[11px] uppercase tracking-[0.4em] text-center animate-pulse">
                    {{ __('A new link has been dispatched to your registered address.') }}
                </div>
            @endif

            <div class="bg-stone-900/40 backdrop-blur-2xl border border-white/5 p-10 md:p-14 shadow-3xl">
                <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                    
                    <form method="POST" action="{{ route('verification.send') }}" class="w-full md:w-auto">
                        @csrf
                        <button type="submit" class="w-full md:w-auto bg-white text-black py-5 px-10 text-[11px] uppercase tracking-[0.4em] font-bold hover:bg-amber-600 hover:text-white transition-all duration-700 active:scale-95 shadow-xl">
                            {{ __('Resend Dispatch') }}
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}" class="w-full md:w-auto text-center">
                        @csrf
                        <button type="submit" class="text-[10px] uppercase tracking-[0.4em] text-stone-600 hover:text-white transition-all group flex items-center justify-center space-x-3 mx-auto">
                            <span class="h-px w-4 bg-stone-800 group-hover:bg-amber-500 transition-all"></span>
                            <span>{{ __('Exit Portal') }}</span>
                        </button>
                    </form>
                </div>
            </div>

            <div class="mt-16 flex justify-center space-x-8 opacity-10">
                <div class="text-[10px] uppercase tracking-[0.5em] text-white italic">Security Check 01</div>
                <div class="text-[10px] uppercase tracking-[0.5em] text-white italic">Security Check 02</div>
            </div>
        </div>
    </main>

</body>    
</html>