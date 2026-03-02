<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horologos | Timeless Precision</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
@keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-reveal { animation: slideUp 1s cubic-bezier(0.22, 1, 0.36, 1) forwards; }

@keyframes float-slow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(1deg); }
        }
        .animate-watch { animation: float-slow 8s ease-in-out infinite; }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        /* Custom Gold Glow for Inputs */
        .input-gold:focus {
            border-color: #d97706; /* amber-600 */
            box-shadow: 0 0 15px rgba(217, 119, 6, 0.1);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-fade { animation: fadeIn 1.5s ease-out; }

        @keyframes slowZoom {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }
        .animate-slow-zoom { animation: slowZoom 20s linear infinite alternate; }
        
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s ease-out;
        }
        /* Since we aren't using JS, we use a simple hover or standard load animation */
        .load-in { animation: fadeInUp 1.2s ease-out forwards; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }


        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }
        @keyframes glow {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.6; }
        }
        .animate-fade-up { animation: fadeInUp 1.2s cubic-bezier(0.22, 1, 0.36, 1) forwards; }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-glow { animation: glow 4s ease-in-out infinite; }
        
        /* Hide scrollbar but keep functionality */
        .no-scrollbar::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="bg-stone-950 text-stone-100 font-sans selection:bg-amber-500/30">

<x-common.header/>

{{ $slot }}
<x-common.footer/>

</body>
</html> 