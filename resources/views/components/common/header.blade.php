@php
    $links = [
        ['home', 'Home'], 
        ['about', 'About'], 
        ['project', 'Projects'], 
        ['service', 'Services'], 
        ['contact', 'Contact']
    ];
@endphp

<header id="mainHeader" class="fixed top-6 left-0 right-0 z-50 px-6 transition-transform duration-500 ease-in-out will-change-transform">
    <nav class="max-w-5xl mx-auto bg-[#1b263b]/80 backdrop-blur-2xl border border-[#415a77] rounded-[2rem] px-6 h-16 flex items-center justify-between shadow-2xl hover:border-[#778da9]/50 transition-colors">
        
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-3 group pl-2" aria-label="Home">
            <div class="bg-[#e0e1dd] text-[#0d1b2a] w-9 h-9 rounded-full flex items-center justify-center font-bold text-sm tracking-tighter group-hover:bg-[#E05A47] group-hover:text-white transition-all duration-300 transform group-hover:rotate-12">AM</div>
            <span class="font-bold text-lg text-[#e0e1dd] tracking-tight">Abdullah<span class="text-[#E05A47]">.</span></span>
        </a>

        <!-- Desktop Nav -->
        <div class="hidden md:flex items-center space-x-1">
            @foreach($links as $link)
                <a href="{{ route($link[0]) }}" 
                   class="px-4 py-2 text-sm font-semibold {{ request()->routeIs($link[0]) ? 'text-white bg-[#0d1b2a]/50' : 'text-[#778da9] hover:text-[#e0e1dd]' }} transition-all rounded-full hover:bg-[#0d1b2a]/50">
                    {{ $link[1] }}
                </a>
            @endforeach
        </div>

        <!-- CTA Action -->
        <div class="hidden md:flex items-center">
            <a href="{{ route('contact') }}" class="bg-[#E05A47] text-white text-xs font-bold uppercase tracking-[0.2em] px-6 py-3 rounded-full hover:bg-[#c44e3e] transition-all duration-300 flex items-center space-x-2 shadow-lg hover:shadow-[#E05A47]/20 hover:scale-105 active:scale-95">
                <i class="fa-regular fa-calendar-days"></i>
                <span>Book a Call</span>
            </a>
        </div>

        <!-- Mobile Toggle -->
        <button id="menuBtn" aria-label="Toggle Menu" aria-expanded="false" class="md:hidden w-10 h-10 flex items-center justify-center text-[#e0e1dd] hover:text-[#E05A47] transition-colors">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>
    </nav>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobileMenu" class="fixed inset-0 bg-[#0d1b2a]/98 backdrop-blur-2xl z-[60] flex flex-col justify-center items-center space-y-10 opacity-0 pointer-events-none transition-all duration-300 ease-in-out">
    <button id="closeBtn" aria-label="Close Menu" class="absolute top-8 right-8 text-4xl text-[#E05A47] hover:rotate-90 transition-transform duration-300">&times;</button>
    @foreach($links as $link)
        <a href="{{ route($link[0]) }}" class="text-3xl font-bold text-[#e0e1dd] hover:text-[#E05A47] transition-all hover:scale-110">
            {{ $link[1] }}
        </a>
    @endforeach
</div>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const closeBtn = document.getElementById('closeBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const header = document.getElementById('mainHeader');

    const toggleMenu = () => {
        const isOpen = mobileMenu.classList.toggle('opacity-0');
        mobileMenu.classList.toggle('pointer-events-none');
        document.body.classList.toggle('overflow-hidden');
        menuBtn.setAttribute('aria-expanded', !isOpen);
    };

    menuBtn.addEventListener('click', toggleMenu);
    closeBtn.addEventListener('click', toggleMenu);

    // Close menu when link is clicked
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', toggleMenu);
    });

    let lastScroll = 0;
    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const currentScroll = window.pageYOffset;
                if (currentScroll > lastScroll && currentScroll > 100) {
                    header.style.transform = 'translateY(-120px)';
                } else {
                    header.style.transform = 'translateY(0)';
                }
                lastScroll = currentScroll;
                ticking = false;
            });
            ticking = true;
        }
    });
</script>