<footer class="bg-[#0d1b2a] pt-20 pb-10 border-t border-[#415a77]">
    <div class="max-w-6xl mx-auto px-6">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
            
            <!-- Branding -->
            <div class="space-y-6">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="bg-[#e0e1dd] text-[#0d1b2a] w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm group-hover:bg-[#E05A47] group-hover:text-white transition-all duration-300 transform group-hover:rotate-12">AM</div>
                    <span class="font-bold text-xl text-[#e0e1dd] tracking-tight">Abdullah<span class="text-[#E05A47]">.</span></span>
                </a>
                <p class="text-sm leading-relaxed text-[#778da9]">Full-stack developer & entrepreneur building scalable digital products that drive results.</p>
                <div class="flex space-x-3">
                    @php $socials = ['instagram' => 'https://www.instagram.com/a_dot614?igsh=djY3dnExYjB6dDVk', 'linkedin-in' => 'https://www.linkedin.com/in/abdullah-bin-mumtaz-70a98b382/', 'github' => 'https://github.com/A-dot614']; @endphp
                    @foreach($socials as $icon => $url)
                        <a href="{{ $url }}" class="w-10 h-10 rounded-full bg-[#1b263b] flex items-center justify-center text-[#e0e1dd] hover:bg-[#E05A47] hover:text-white transition-all duration-300 hover:scale-110">
                            <i class="fa-brands fa-{{ $icon }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Links -->
            <div>
                <h3 class="text-[#e0e1dd] font-bold mb-6 tracking-wide uppercase text-xs opacity-80">Explore</h3>
                <ul class="space-y-4 text-sm">
                    @foreach(['About Me' => 'about', 'Services' => 'service', 'Portfolio' => 'project', 'Book a Call' => 'booking'] as $label => $route)
                        <li><a href="{{ route($route) }}" class="text-[#778da9] hover:text-[#E05A47] transition-all flex items-center group">
                            <span class="mr-2 opacity-0 group-hover:opacity-100 transition-opacity">→</span>{{ $label }}
                        </a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Expertise -->
            <div>
                <h3 class="text-[#e0e1dd] font-bold mb-6 tracking-wide uppercase text-xs opacity-80">Expertise</h3>
                <ul class="space-y-4 text-sm text-[#778da9]">
                    <li class="hover:text-[#e0e1dd] transition-colors cursor-default">Full-Stack Development</li>
                    <li class="hover:text-[#e0e1dd] transition-colors cursor-default">Technical Consulting</li>
                    <li class="hover:text-[#e0e1dd] transition-colors cursor-default">MVP Strategy</li>
                    <li class="hover:text-[#e0e1dd] transition-colors cursor-default">Cloud Architecture</li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-[#e0e1dd] font-bold mb-6 tracking-wide uppercase text-xs opacity-80">Stay Updated</h3>
                <form class="relative group">
                    <input type="email" placeholder="you@example.com" class="w-full bg-[#1b263b]/50 border border-[#415a77] p-3 pl-4 pr-16 rounded-full text-sm focus:outline-none focus:border-[#E05A47] text-[#e0e1dd] transition-all placeholder:text-[#415a77]">
                    <button class="absolute right-1 top-1 bottom-1 bg-[#E05A47] text-white px-5 rounded-full text-xs font-bold hover:bg-[#ff6b57] transition-all">Join</button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-[#415a77]/50 pt-8 flex flex-col md:flex-row justify-between items-center text-xs gap-6">
            <p class="text-[#778da9]">&copy; {{ date('Y') }} Abdullah Bin Mumtaz. All rights reserved.</p>
            
            <div class="flex items-center space-x-2 bg-[#1b263b] px-4 py-2 rounded-full border border-[#415a77]">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-[#e0e1dd] font-medium">Available for new projects</span>
            </div>
        </div>
    </div>
</footer>