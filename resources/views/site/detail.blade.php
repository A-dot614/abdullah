<x-layouts.main>
    <main class="max-w-6xl mx-auto px-6 py-20 text-[#e0e1dd]">
        <!-- Back Navigation -->
        <div class="mb-12">
            <a href="{{ route('project') }}" class="group inline-flex items-center gap-4 text-sm font-bold uppercase tracking-widest text-[#778da9] hover:text-[#E05A47] transition-all">
                <span class="w-10 h-10 rounded-full border border-[#415a77] flex items-center justify-center group-hover:bg-[#E05A47] group-hover:border-[#E05A47] group-hover:text-white transition-all">
                    <i class="fa-solid fa-arrow-left"></i>
                </span>
                Back to Projects
            </a>
        </div>

        <section class="grid gap-8 lg:grid-cols-[2fr_1fr]">
            <!-- Main Content -->
            <div class="space-y-8">
                <!-- Hero Image Card -->
                <div class="rounded-[3rem] overflow-hidden border border-[#415a77] bg-[#1b263b]/50 p-2 shadow-2xl">
                    <div class="relative aspect-[16/9] rounded-[2.5rem] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1516534775068-bb57e39c568d" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                </div>

                <!-- Project Narrative -->
                <div class="p-10 md:p-12 rounded-[3rem] bg-[#1b263b]/40 border border-[#415a77]">
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tighter mb-8">Real Estate Portal</h1>
                    <p class="text-lg text-[#778da9] leading-relaxed mb-10">
                        A full-stack property listing platform designed for modern real estate agencies. Featuring advanced search filters, virtual tours, and automated inquiry systems to streamline the buyer-agent journey.
                    </p>

                    <div class="grid gap-6 sm:grid-cols-2">
                        <div class="p-8 rounded-[2rem] bg-[#0d1b2a]/50 border border-[#415a77]">
                            <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#E05A47] mb-4">Core Highlights</h2>
                            <ul class="space-y-3 text-sm text-[#e0e1dd]">
                                <li class="flex items-center gap-3"><i class="fa-solid fa-check text-[#E05A47]"></i> Advanced Property Filtering</li>
                                <li class="flex items-center gap-3"><i class="fa-solid fa-check text-[#E05A47]"></i> Integrated Virtual Tours</li>
                                <li class="flex items-center gap-3"><i class="fa-solid fa-check text-[#E05A47]"></i> Agent Dashboard Automation</li>
                            </ul>
                        </div>
                        <div class="p-8 rounded-[2rem] bg-[#0d1b2a]/50 border border-[#415a77]">
                            <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#E05A47] mb-4">Tech Stack</h2>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Laravel', 'Tailwind', 'Alpine.js', 'MySQL'] as $tech)
                                    <span class="px-4 py-2 rounded-full bg-[#1b263b] border border-[#415a77] text-[11px] font-bold text-[#e0e1dd] hover:border-[#E05A47] transition-colors cursor-default">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="space-y-8">
                <!-- Metadata -->
                <div class="rounded-[2.5rem] border border-[#415a77] bg-[#1b263b]/40 p-10 shadow-lg">
                    <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#E05A47] mb-8">Project Details</h2>
                    <div class="space-y-6">
                        @foreach([['Client', 'Home Finder'], ['Role', 'Full-stack Dev'], ['Timeline', '4 Months'], ['Status', 'Completed']] as $item)
                            <div class="flex justify-between items-center group">
                                <span class="text-sm text-[#778da9]">{{ $item[0] }}</span>
                                <span class="text-sm font-bold text-[#e0e1dd] group-hover:text-[#E05A47] transition-colors">{{ $item[1] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- CTA Links -->
                <div class="grid gap-4">
                    <a href="#" class="group flex items-center justify-between p-6 rounded-[2rem] bg-[#E05A47] text-white font-bold hover:bg-[#c44e3e] hover:scale-[1.02] transition-all shadow-lg shadow-[#E05A47]/20">
                        <span>Live Demo</span>
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-6 rounded-[2rem] bg-[#1b263b]/40 border border-[#415a77] font-bold text-[#e0e1dd] hover:border-[#E05A47] transition-all">
                        <span>GitHub Repo</span>
                        <i class="fa-brands fa-github text-xl group-hover:text-[#E05A47] transition-colors"></i>
                    </a>
                </div>
            </aside>
        </section>
    </main>
</x-layouts.main>