<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Abdullah Bin Mumtaz - Expert Developer specializing in modern web solutions.">
    <title>Abdullah Bin Mumtaz | Professional Portfolio</title>
    
    <!-- Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        brand: { 500: '#E05A47' },
                        navy: { 900: '#0d1b2a', 800: '#1b263b', 700: '#415a77', 600: '#778da9', 100: '#e0e1dd' }
                    }
                }
            }
        }
    </script>
    <style>
        .glass { background: rgba(13, 27, 42, 0.7); backdrop-filter: blur(15px); border-bottom: 1px solid rgba(65, 90, 119, 0.3); }
        .gradient-text { background: linear-gradient(90deg, #E05A47, #ff8c7a); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0d1b2a; }
        ::-webkit-scrollbar-thumb { background: #E05A47; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #c54a3a; }



        /* ... existing styles ... */
    
    /* WhatsApp Pulse Animation */
    @keyframes pulse-whatsapp {
        0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
        70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
        100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
    }
    .animate-pulse-whatsapp {
        animation: pulse-whatsapp 2s infinite;
    }
    </style>
</head>
<body class="bg-navy-900 text-navy-100 antialiased selection:bg-brand-500 selection:text-white">

    <!-- Professional Nav -->
    <nav class="fixed w-full z-50 glass">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/" class="text-2xl font-bold font-heading tracking-tighter">Abdullah<span class="text-brand-500">.</span></a>
            <x-common.header /> <!-- Keep your component here -->
        </div>
    </nav>
    
    <main class="pt-20 min-h-screen"> 
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-navy-950 py-12 border-t border-navy-800">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <x-common.footer />
        </div>
    </footer>

    <!-- Modern WhatsApp Button -->
<a href="https://wa.me/1234567890" target="_blank" 
   class="fixed bottom-8 right-8 z-50 group flex items-center justify-center w-16 h-16 bg-[#25D366] rounded-full shadow-lg animate-pulse-whatsapp hover:scale-110 transition-all duration-300">
    <i class="fa-brands fa-whatsapp text-3xl text-white"></i>
    <span class="absolute right-full mr-4 bg-navy-800 text-white px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity text-sm whitespace-nowrap shadow-xl">Let's Talk</span>
</a>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>
</body>
</html>