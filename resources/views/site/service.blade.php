<x-layouts.main>
    <main class="max-w-6xl mx-auto px-6 py-20 text-[#e0e1dd]">
        <!-- Header -->
        <div class="text-center mb-24" data-aos="fade-down">
            <h1 class="text-5xl md:text-7xl font-bold tracking-tighter mb-8">
                My <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#E05A47] to-[#ff8c7a]">Services</span>
            </h1>
            <p class="text-xl text-[#778da9] max-w-2xl mx-auto leading-relaxed">
                Comprehensive development and design solutions, engineered to scale your business.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-32">
            @foreach([
                ['bezier-curve', 'Web Design', 'Intuitive interfaces that merge beauty with functionality.'],
                ['code', 'Frontend Dev', 'High-performance UI built for modern browsers.'],
                ['server', 'Backend Dev', 'Robust architecture with secure, scalable APIs.'],
                ['layer-group', 'Full-Stack', 'End-to-end solutions from concept to deployment.'],
                ['shopping-cart', 'E-Commerce', 'Seamless shopping experiences with secure payment integration.'],
                ['mobile-screen', 'Mobile App', 'Cross-platform apps optimized for mobile users.']
            ] as $service)
            <div class="group p-8 rounded-[2.5rem] bg-[#1b263b]/50 border border-[#415a77] hover:border-[#E05A47]/50 transition-all duration-500 hover:shadow-2xl hover:shadow-[#E05A47]/5 hover:-translate-y-2">
                <div class="w-16 h-16 rounded-3xl bg-[#0d1b2a] text-[#E05A47] flex items-center justify-center text-2xl mb-8 group-hover:bg-[#E05A47] group-hover:text-white transition-all duration-500 shadow-inner">
                    <i class="fa-solid fa-{{ $service[0] }}"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">{{ $service[1] }}</h3>
                <p class="text-sm text-[#778da9] leading-relaxed">{{ $service[2] }}</p>
            </div>
            @endforeach
        </div>

        <!-- Pricing Packages -->
        <div class="mb-32">
            <h2 class="text-4xl font-bold text-center mb-16" data-aos="fade-up">Choose Your <span class="text-[#E05A47]">Path</span></h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['Starter', '$499', ['Responsive Design', '5 Pages', 'Contact Form', 'Mobile Optimized']],
                    ['Professional', '$999', ['Custom Design', '15 Pages', 'CMS Integration', 'SEO Optimization']],
                    ['Enterprise', 'Custom', ['E-Commerce Setup', 'Admin Dashboard', 'API Development', '24/7 Support']]
                ] as $pkg)
                <div class="p-10 rounded-[2.5rem] bg-[#1b263b] border {{ $loop->iteration == 2 ? 'border-[#E05A47] shadow-2xl shadow-[#E05A47]/10' : 'border-[#415a77]' }} relative transition-transform hover:scale-[1.02]">
                    @if($loop->iteration == 2)
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-[#E05A47] text-white px-5 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest shadow-lg shadow-[#E05A47]/50">Popular</div>
                    @endif
                    <h3 class="text-xl font-bold mb-2 opacity-80">{{ $pkg[0] }}</h3>
                    <p class="text-5xl font-bold text-[#E05A47] mb-8">{{ $pkg[1] }}</p>
                    <ul class="space-y-4 mb-10 text-sm text-[#778da9]">
                        @foreach($pkg[2] as $feat)
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check text-[#E05A47]"></i> {{ $feat }}</li>
                        @endforeach
                    </ul>
                    <a href="#contact" class="block text-center w-full py-4 rounded-full font-bold {{ $loop->iteration == 2 ? 'bg-[#E05A47] text-white hover:bg-[#c44e3e]' : 'bg-[#0d1b2a] border border-[#415a77] hover:bg-[#E05A47] hover:text-white' }} transition-all">Get Started</a>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Additional Services List -->
        <div class="p-12 md:p-16 rounded-[3rem] bg-[#1b263b]/30 border border-[#415a77] backdrop-blur-sm">
            <h2 class="text-3xl font-bold mb-12">Expertise Across The Board</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach(['SEO Optimization', 'Website Maintenance', 'Performance Testing', 'Technical Support', 'Migration Services', 'Strategic Consulting'] as $item)
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full bg-[#0d1b2a] flex items-center justify-center border border-[#415a77] group-hover:border-[#E05A47] transition-colors">
                            <i class="fa-solid fa-plus text-xs text-[#E05A47]"></i>
                        </div>
                        <span class="font-bold text-[#778da9] group-hover:text-[#e0e1dd] transition-colors">{{ $item }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-layouts.main>