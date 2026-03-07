<!DOCTYPE html>
<html lang="en" class="bg-stone-950">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resistor Vault | Secure Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; overflow: hidden; }
        .font-serif { font-family: 'Playfair Display', serif; }


        /* PRELOADER LOGIC */
        #preloader {
            position: fixed; inset: 0; background: #0c0a09; z-index: 100;
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            animation: fadeOut 0.8s ease-in 2s forwards; pointer-events: none;
        }
        @keyframes fadeOut { to { opacity: 0; visibility: hidden; } }
        
        .loader-bar { width: 180px; height: 1px; background: #1c1917; position: relative; margin-top: 24px; }
        .loader-progress { position: absolute; height: 100%; background: #f59e0b; width: 0%; animation: load 1.8s ease-in-out forwards; }
        @keyframes load { to { width: 100%; } }

        /* REVEAL SEQUENCE */
        .reveal { opacity: 0; transform: translateY(15px); animation: slideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .reveal-1 { animation-delay: 2.3s; }
        .reveal-2 { animation-delay: 2.5s; }

        @keyframes slideUp { to { opacity: 1; transform: translateY(0); } }

        /* SIDEBAR TOGGLE */
        #menu-toggle { display: none; }
        #menu-toggle:checked ~ aside { transform: translateX(0); }
    </style>
</head>
<body class="bg-stone-950 text-stone-100 flex h-screen overflow-hidden">

    <div id="preloader">
        <div class="text-[10px] uppercase tracking-[1em] text-stone-500 mb-2">Resistor</div>
        <div class="loader-bar"><div class="loader-progress"></div></div>
    </div>

    <input type="checkbox" id="menu-toggle">

    <aside class="fixed lg:static inset-y-0 left-0 w-72 bg-stone-950 border-r border-white/5 flex flex-col z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-500">
         <x-common.buysidebar/>
    </aside>

    <div class="flex-1 flex flex-col min-w-0">
        
        <header class="h-24 border-b border-white/5 flex items-center justify-between px-8 lg:px-12 bg-stone-950/80 backdrop-blur-md sticky top-0 z-40">
             <x-common.buyheader/>
        </header>

        {{ $slot }}
    </div>
</body>
</html>