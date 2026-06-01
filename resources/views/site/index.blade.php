<x-layouts.main>
    <main class="max-w-6xl mx-auto px-6 pt-20 text-[#e0e1dd]">

        <!-- Hero Section -->
        <section id="home" class="min-h-[85vh] flex flex-col-reverse lg:flex-row items-center justify-between py-12 gap-16">
            <div class="w-full lg:w-1/2 space-y-8" data-aos="fade-right">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#1b263b] border border-[#415a77] text-xs font-bold tracking-widest uppercase text-[#E05A47]">
                    <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#E05A47] opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-[#E05A47]"></span></span>
                    Available for Work
                </div>
                <h1 class="text-6xl md:text-8xl font-bold tracking-tighter leading-[0.9]">
                    Abdullah<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#E05A47] to-[#ff8c7a]">Bin Mumtaz.</span>
                </h1>
                <p class="text-xl text-[#778da9] max-w-lg leading-relaxed">
                    Full-Stack Developer crafting high-performance digital experiences with <span class="text-[#e0e1dd] font-semibold underline decoration-[#E05A47]">Laravel & modern web stacks</span>.
                </p>
                <div class="flex gap-4">
                    <a href="{{ route('project') }}" class="px-8 py-4 bg-[#E05A47] text-white rounded-full font-bold hover:bg-[#c44e3e] shadow-lg shadow-[#E05A47]/20 transition-all hover:scale-105">View Projects</a>
                    <a href="{{ route('contact') }}" class="px-8 py-4 border border-[#415a77] rounded-full font-bold hover:border-[#e0e1dd] transition-all">Let's Talk</a>
                </div>
            </div>

            <!-- Profile Image Frame -->
            <div class="relative group" data-aos="fade-left">
                <div class="absolute -inset-1 bg-gradient-to-br from-[#E05A47] to-[#0d1b2a] rounded-[2.5rem] blur opacity-40 group-hover:opacity-70 transition duration-1000"></div>
                <div class="relative w-72 h-96 rounded-[2.5rem] overflow-hidden border border-[#415a77] bg-[#1b263b]">
                    <img src="{{ asset('frontend.png') }}" class="w-full h-full object-cover grayscale contrast-125 group-hover:grayscale-0 transition duration-700 hover:scale-110">
                </div>
            </div>
        </section>

        <!-- About & Services -->
        <section id="about" class="py-24 border-t border-[#415a77]" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="rounded-[2.5rem] overflow-hidden border border-[#415a77] aspect-[4/5] shadow-2xl">
                    <img src="{{ asset('about.jpeg') }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                </div>
                <div class="space-y-8">
                    <h2 class="text-5xl font-bold tracking-tighter">About Me<span class="text-[#E05A47]">.</span></h2>
                    <p class="text-xl text-[#778da9] leading-relaxed">
                        I build solutions that blend elegant design with robust engineering. I believe in clean, maintainable, and scalable code that solves actual business problems.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach(['Laravel' => 'fa-laravel', 'PHP' => 'fa-php', 'Tailwind' => 'fa-css3', 'JS' => 'fa-js', 'MySQL' => 'fa-database', 'Git' => 'fa-github'] as $skill => $icon)
                            <div class="flex items-center gap-3 p-4 bg-[#1b263b] rounded-2xl border border-[#415a77] hover:border-[#E05A47]/50 transition-colors">
                                <i class="fa-brands {{ $icon }} text-[#E05A47]"></i>
                                <span class="font-bold">{{ $skill }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Grid -->
        <section id="projects" class="py-24 border-t border-[#415a77]">
            <h2 class="text-5xl font-bold tracking-tighter mb-16" data-aos="fade-up">Featured Projects<span class="text-[#E05A47]">.</span></h2>
            <div class="grid md:grid-cols-2 gap-8">
                @for($i = 0; $i < 4; $i++)
                <div class="group bg-[#1b263b]/50 p-5 rounded-[2rem] border border-[#415a77] hover:border-[#E05A47]/50 transition-all duration-500" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="overflow-hidden rounded-[1.5rem] aspect-video mb-6">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="px-2">
                        <h3 class="text-xl font-bold mb-2">Modern SaaS Platform</h3>
                        <p class="text-sm text-[#778da9] mb-6">High-performance dashboard built with Laravel, Inertia, and Tailwind.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-[#E05A47] hover:gap-4 transition-all">View Project →</a>
                    </div>
                </div>
                @endfor
            </div>
        </section>

<section class="relative py-24 px-6 rounded-[3rem] overflow-hidden border border-[#415a77] my-20">
    <!-- Background Image Layer -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-[#0d1b2a]/80"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center max-w-3xl mx-auto">
        <h2 class="text-5xl md:text-6xl font-bold tracking-tighter mb-6 text-white">
            Ready to bring your idea to life?
        </h2>
        <p class="text-xl text-[#778da9] mb-12">
            Let's discuss your project. I'll help you build something that makes a real impact.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16">
            <a href="{{ route('booking') }}" class="px-10 py-4 bg-white text-[#0d1b2a] font-bold rounded-2xl hover:bg-gray-200 transition-all hover:scale-105">
                Schedule a Call →
            </a>
            <a href="{{ route('contact') }}" class="px-10 py-4 border border-white/20 text-white font-bold rounded-2xl hover:bg-white/10 transition-all">
                Send a Message
            </a>
        </div>

        <!-- Trust Indicators -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 pt-8 border-t border-white/10 text-[#778da9] text-sm font-bold uppercase tracking-widest">
            <div>Fast response time</div>
            <div>No commitment required</div>
            <div>100% satisfaction guarantee</div>
        </div>
    </div>
</section>

    </main>
</x-layouts.main>