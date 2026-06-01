<x-layouts.main>
    <section class="py-24 px-6 max-w-6xl mx-auto text-[#e0e1dd]">
        <!-- Header -->
        <div class="text-center mb-24" data-aos="fade-down">
            <h1 class="text-5xl md:text-7xl font-bold tracking-tighter mb-6">
                About <span class="text-[#E05A47]">Me</span>
            </h1>
            <p class="text-xl text-[#778da9] max-w-2xl mx-auto">
                Turning complex problems into elegant, functional digital experiences.
            </p>
        </div>

        <!-- Intro Grid -->
        <div class="grid md:grid-cols-2 gap-16 items-center mb-32">
            <div class="relative group" data-aos="fade-right">
                <div class="absolute -inset-4 bg-gradient-to-tr from-[#E05A47] to-[#0d1b2a] rounded-[2.5rem] blur opacity-20 group-hover:opacity-40 transition-all duration-700"></div>
                <div class="relative rounded-[2.5rem] overflow-hidden border border-[#415a77] aspect-[4/5] shadow-2xl">
                    <img src="{{ asset('frontend.png') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 hover:scale-105">
                </div>
            </div>

            <div class="space-y-8" data-aos="fade-left">
                <h2 class="text-4xl font-bold tracking-tight">Bridging Design & Code.</h2>
                <p class="text-lg text-[#778da9] leading-relaxed">
                    I'm a full-stack developer with 2+ years of experience in building scalable web applications. I specialize in the Laravel/PHP ecosystem, paired with modern frontend frameworks and responsive UI design.
                </p>
                <div class="flex flex-wrap gap-4">
                    <!-- <a href="#" class="px-8 py-4 bg-[#E05A47] text-white rounded-full font-bold shadow-lg shadow-[#E05A47]/20 hover:bg-[#c44e3e] transition-all hover:scale-105">Download CV</a> -->
                    <a href="{{ route('contact') }}" class="px-8 py-4 border border-[#415a77] rounded-full font-bold hover:border-[#E05A47] hover:text-[#E05A47] transition-all">Let's Connect</a>
                </div>
            </div>
        </div>

        <!-- Journey Section (Refined Timeline) -->
        <div class="mb-32">
            <h2 class="text-4xl font-bold mb-16" data-aos="fade-up">My Journey<span class="text-[#E05A47]">.</span></h2>
            <div class="relative space-y-6">
                <!-- Vertical Line -->
                <div class="absolute left-10 top-0 bottom-0 w-px bg-[#415a77] hidden md:block"></div>
                
                @php 
                    $journey = [
                        ['2024', 'Professional Growth', 'Freelancing, client projects, and mastering UI/UX methodologies.'],
                        ['2022', 'Full-Stack Shift', 'Deepened expertise in Laravel, databases, and RESTful architecture.'],
                        ['2021', 'Frontend Focus', 'Mastered React/Vue and component-based design systems.'],
                        ['2020', 'Foundation', 'Building the core understanding of HTML, CSS, and JS.']
                    ];
                @endphp
                @foreach($journey as $item)
                    <div class="group relative flex items-start gap-8" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="w-20 h-20 flex-shrink-0 flex items-center justify-center rounded-2xl bg-[#1b263b] border border-[#415a77] z-10 font-bold text-[#E05A47] group-hover:bg-[#E05A47] group-hover:text-white transition-all shadow-lg">
                            {{ $item[0] }}
                        </div>
                        <div class="bg-[#1b263b]/50 p-8 rounded-[2rem] border border-[#415a77] hover:border-[#415a77]/80 w-full hover:bg-[#1b263b] transition-all">
                            <h3 class="text-xl font-bold mb-2 text-[#e0e1dd]">{{ $item[1] }}</h3>
                            <p class="text-[#778da9]">{{ $item[2] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

<!-- Modern Skills Grid -->
<div class="border-t border-[#415a77] pt-24" data-aos="fade-up">
    <h2 class="text-4xl font-bold mb-16">Expertise<span class="text-[#E05A47]">.</span></h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @php
            $skills = [
                'HTML5'      => 'fa-html5',
                'Tailwind'   => 'fa-css3',
                'JavaScript' => 'fa-js',
                'React'      => 'fa-react',
                'Node.js'    => 'fa-node-js',
                'Laravel'    => 'fa-laravel',
                'MySQL'      => 'fa-database',
                'Git'        => 'fa-github'
            ];
        @endphp

        @foreach($skills as $skill => $icon)
            <div class="group p-8 bg-[#1b263b] rounded-[2rem] border border-[#415a77] text-center font-bold hover:bg-[#E05A47] hover:border-transparent transition-all cursor-default shadow-lg hover:-translate-y-2">
                <span class="block text-4xl mb-4 text-[#e0e1dd] group-hover:text-white transition-colors duration-300">
                    <i class="fa-brands {{ $icon }}"></i>
                </span>
                <span class="text-[#e0e1dd] group-hover:text-white">{{ $skill }}</span>
            </div>
        @endforeach
    </div>
</div>
    </section>
</x-layouts.main>