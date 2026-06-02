<x-layouts.main>
    <main class="max-w-7xl mx-auto px-6 pt-20 text-[#e0e1dd]">
        <section class="py-24">
            <!-- Header -->
            <div class="mb-20 text-center md:text-left flex flex-col md:flex-row md:items-end justify-between gap-8">
                <div>
                    <h1 class="text-6xl md:text-8xl font-bold tracking-tighter mb-4">
                        Featured <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#E05A47] to-[#ff8c7a]">Projects</span>
                    </h1>
                    <p class="text-lg text-[#778da9]">A collection of my recent work, research, and experiments.</p>
                </div>
                
                <!-- Filters -->
                <!-- <div class="flex flex-wrap gap-2">
                    @foreach(['All', 'Web', 'Apps', 'Dashboards'] as $filter)
                        <button class="px-6 py-2 rounded-full text-[11px] font-bold uppercase tracking-widest border transition-all 
                            {{ $loop->first ? 'bg-[#E05A47] border-[#E05A47] text-white shadow-lg shadow-[#E05A47]/20' : 'border-[#415a77] text-[#778da9] hover:bg-[#1b263b] hover:border-[#E05A47] hover:text-white' }}">
                            {{ $filter }}
                        </button>
                    @endforeach
                </div> -->
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
               
                <div class="group bg-[#1b263b]/40 p-4 rounded-[2.5rem] border border-[#415a77] hover:border-[#415a77]/80 transition-all duration-500 hover:shadow-2xl hover:shadow-black/30">
                    <!-- Thumbnail -->
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[16/11] mb-6">
                        <img src="{{ asset('project/AI_learn.jpeg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1b2a] via-transparent to-transparent opacity-80"></div>
                        <!-- <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white font-bold text-sm bg-[#E05A47] px-8 py-3 rounded-full flex items-center gap-2">
                                View Case <i class="fa-solid fa-arrow-right text-xs"></i>
                            </span>
                        </div> -->
                    </div>
                    
                    <div class="px-3 pb-3">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[10px] font-bold tracking-[0.2em] text-[#E05A47] uppercase bg-[#E05A47]/10 px-3 py-1 rounded-full">Development</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#415a77]">2026</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-[#e0e1dd]">AI-learning</h3>
                        <p class="text-sm text-[#778da9] mb-6 leading-relaxed line-clamp-2">AI-powered educational web application built for seamless student engagement and data-driven learning experiences.</p>
                        
                        <div class="flex gap-4 text-[#778da9]">
                            <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-regular fa-eye"></i></a>  -->
                           <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-brands fa-github"></i></a> -->
                        </div>
                    </div>
                </div>
                
 
                <div class="group bg-[#1b263b]/40 p-4 rounded-[2.5rem] border border-[#415a77] hover:border-[#415a77]/80 transition-all duration-500 hover:shadow-2xl hover:shadow-black/30">
                    <!-- Thumbnail -->
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[16/11] mb-6">
                        <img src="{{ asset('project/CRM.jpeg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1b2a] via-transparent to-transparent opacity-80"></div>
                        <!-- <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white font-bold text-sm bg-[#E05A47] px-8 py-3 rounded-full flex items-center gap-2">
                                View Case <i class="fa-solid fa-arrow-right text-xs"></i>
                            </span>
                        </div> -->
                    </div>
                    
                    <div class="px-3 pb-3">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[10px] font-bold tracking-[0.2em] text-[#E05A47] uppercase bg-[#E05A47]/10 px-3 py-1 rounded-full">Development</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#415a77]">2026</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-[#e0e1dd]">CRM System</h3>
                        <p class="text-sm text-[#778da9] mb-6 leading-relaxed line-clamp-2">A modern, data-driven CRM solution designed to help sales teams sell smarter with integrated automation and scalable pricing.</p>
                        
                        <div class="flex gap-4 text-[#778da9]">
                            <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-regular fa-eye"></i></a>  -->
                           <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-brands fa-github"></i></a> -->
                        </div>
                    </div>
                </div>
 
                <div class="group bg-[#1b263b]/40 p-4 rounded-[2.5rem] border border-[#415a77] hover:border-[#415a77]/80 transition-all duration-500 hover:shadow-2xl hover:shadow-black/30">
                    <!-- Thumbnail -->
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[16/11] mb-6">
                        <img src="{{ asset('project/elite.jpeg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1b2a] via-transparent to-transparent opacity-80"></div>
                        <!-- <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white font-bold text-sm bg-[#E05A47] px-8 py-3 rounded-full flex items-center gap-2">
                                View Case <i class="fa-solid fa-arrow-right text-xs"></i>
                            </span>
                        </div> -->
                    </div>
                    
                    <div class="px-3 pb-3">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[10px] font-bold tracking-[0.2em] text-[#E05A47] uppercase bg-[#E05A47]/10 px-3 py-1 rounded-full">Development</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#415a77]">2026</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-[#e0e1dd]">Elite</h3>
                        <p class="text-sm text-[#778da9] mb-6 leading-relaxed line-clamp-2">A modern, elegant archival system that bridges the gap between digital asset management and exclusive user experience.</p>
                        
                        <div class="flex gap-4 text-[#778da9]">
                            <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-regular fa-eye"></i></a>  -->
                           <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-brands fa-github"></i></a> -->
                        </div>
                    </div>
                </div>
      
                <div class="group bg-[#1b263b]/40 p-4 rounded-[2.5rem] border border-[#415a77] hover:border-[#415a77]/80 transition-all duration-500 hover:shadow-2xl hover:shadow-black/30">
                    <!-- Thumbnail -->
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[16/11] mb-6">
                        <img src="{{ asset('project/watch.jpeg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1b2a] via-transparent to-transparent opacity-80"></div>
                        <!-- <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white font-bold text-sm bg-[#E05A47] px-8 py-3 rounded-full flex items-center gap-2">
                                View Case <i class="fa-solid fa-arrow-right text-xs"></i>
                            </span>
                        </div> -->
                    </div>
                    
                    <div class="px-3 pb-3">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[10px] font-bold tracking-[0.2em] text-[#E05A47] uppercase bg-[#E05A47]/10 px-3 py-1 rounded-full">Development</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#415a77]">2026</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-[#e0e1dd]">Watch </h3>
                        <p class="text-sm text-[#778da9] mb-6 leading-relaxed line-clamp-2">An elegant, high-end digital ecosystem for managing rare watch collections with precision authentication and performance insights.</p>
                        
                        <div class="flex gap-4 text-[#778da9]">
                            <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-regular fa-eye"></i></a>  -->
                           <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-brands fa-github"></i></a> -->
                        </div>
                    </div>
                </div>                

                <div class="group bg-[#1b263b]/40 p-4 rounded-[2.5rem] border border-[#415a77] hover:border-[#415a77]/80 transition-all duration-500 hover:shadow-2xl hover:shadow-black/30">
                    <!-- Thumbnail -->
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[16/11] mb-6">
                        <img src="{{asset('project/zenith.jpeg')}}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1b2a] via-transparent to-transparent opacity-80"></div>
                        <!-- <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white font-bold text-sm bg-[#E05A47] px-8 py-3 rounded-full flex items-center gap-2">
                                View Case <i class="fa-solid fa-arrow-right text-xs"></i>
                            </span>
                        </div> -->
                    </div>
                    
                    <div class="px-3 pb-3">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[10px] font-bold tracking-[0.2em] text-[#E05A47] uppercase bg-[#E05A47]/10 px-3 py-1 rounded-full">Development</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#415a77]">2026</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-[#e0e1dd]">Zenith</h3>
                        <p class="text-sm text-[#778da9] mb-6 leading-relaxed line-clamp-2">A sleek, dark-mode system dashboard providing comprehensive control over node performance and hardware configurations.</p>
                        
                        <div class="flex gap-4 text-[#778da9]">
                            <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-regular fa-eye"></i></a>  -->
                           <!--  <a href="#" class="hover:text-[#E05A47] transition-colors"><i class="fa-brands fa-github"></i></a> -->
                        </div>
                    </div>
                </div>               
                
            </div>

            <!-- CTA Section -->
            <div class="mt-32 p-16 rounded-[3rem] bg-gradient-to-b from-[#1b263b] to-[#0d1b2a] border border-[#415a77] text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#E05A47]/10 to-transparent"></div>
                <div class="relative z-10">
                    <h3 class="text-4xl md:text-5xl font-bold mb-6 tracking-tight">Ready to start your project?</h3>
                    <p class="text-lg text-[#778da9] mb-10 max-w-lg mx-auto">Let's collaborate to build something impactful that stands out in the digital space.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-[#E05A47] text-white px-10 py-4 rounded-full font-bold hover:bg-[#c44e3e] transition-all hover:scale-105 active:scale-95 shadow-xl shadow-[#E05A47]/20">
                        Start a Project <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>
</x-layouts.main>