<x-layouts.main>
    <main class="max-w-6xl mx-auto px-6 py-20 text-[#e0e1dd]">
        
        <!-- Hero Section -->
        <div class="mb-16" data-aos="fade-up">
            <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#E05A47] mb-4 block">// get in touch</span>
            <h1 class="text-6xl md:text-8xl font-bold tracking-tighter mb-6">Let's Connect</h1>
            <p class="text-xl text-[#778da9] max-w-2xl">Have a question or want to work together? I'd love to hear about your project goals.</p>
        </div>

<!-- Main Grid -->
<div class="grid lg:grid-cols-[2fr_1fr] gap-12 mb-20" data-aos="fade-up" data-aos-delay="100">
    
    <!-- Form Card -->
    <div class="p-8 md:p-12 rounded-[2.5rem] bg-[#1b263b]/50 border border-[#415a77]">
        <h2 class="text-2xl font-bold mb-10">Send a Message</h2>
        @if (session('status'))
            <div class="mb-6 rounded-2xl bg-green-500/10 border border-green-500/20 p-4 text-sm text-green-200">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
            @csrf
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Name & Email -->
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-[#778da9]">Full Name <span class="text-[#E05A47]">*</span></label>
                    <input name="name" value="{{ old('name') }}" type="text" placeholder="John Doe" class="w-full p-4 bg-[#0d1b2a] rounded-2xl border border-[#415a77] focus:border-[#E05A47] outline-none transition-all text-[#e0e1dd]">
                    @error('name')<p class="text-sm text-[#E05A47] mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-[#778da9]">Email Address <span class="text-[#E05A47]">*</span></label>
                    <input name="email" value="{{ old('email') }}" type="email" placeholder="john@example.com" class="w-full p-4 bg-[#0d1b2a] rounded-2xl border border-[#415a77] focus:border-[#E05A47] outline-none transition-all text-[#e0e1dd]">
                    @error('email')<p class="text-sm text-[#E05A47] mt-1">{{ $message }}</p>@enderror
                </div>
                <!-- Phone & Company -->
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-[#778da9]">Phone (Optional)</label>
                    <input name="phone" value="{{ old('phone') }}" type="tel" placeholder="+1 (555) 123-4567" class="w-full p-4 bg-[#0d1b2a] rounded-2xl border border-[#415a77] focus:border-[#E05A47] outline-none transition-all text-[#e0e1dd]">
                    @error('phone')<p class="text-sm text-[#E05A47] mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-[#778da9]">Company (Optional)</label>
                    <input name="company" value="{{ old('company') }}" type="text" placeholder="Your Company" class="w-full p-4 bg-[#0d1b2a] rounded-2xl border border-[#415a77] focus:border-[#E05A47] outline-none transition-all text-[#e0e1dd]">
                    @error('company')<p class="text-sm text-[#E05A47] mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            <!-- Subject & Budget -->
            <div class="space-y-2">
                <label class="text-[10px] font-bold uppercase tracking-widest text-[#778da9]">Subject <span class="text-[#E05A47]">*</span></label>
                <select name="subject" class="w-full p-4 bg-[#0d1b2a] rounded-2xl border border-[#415a77] focus:border-[#E05A47] outline-none text-[#e0e1dd]">
                    <option value="">Select a subject</option>
                    <option value="Project inquiry" {{ old('subject') === 'Project inquiry' ? 'selected' : '' }}>Project inquiry</option>
                    <option value="Website support" {{ old('subject') === 'Website support' ? 'selected' : '' }}>Website support</option>
                    <option value="General question" {{ old('subject') === 'General question' ? 'selected' : '' }}>General question</option>
                </select>
                @error('subject')<p class="text-sm text-[#E05A47] mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-2">
                <label class="text-[10px] font-bold uppercase tracking-widest text-[#778da9]">Budget Range (Optional)</label>
                <select name="budget" class="w-full p-4 bg-[#0d1b2a] rounded-2xl border border-[#415a77] focus:border-[#E05A47] outline-none text-[#e0e1dd]">
                    <option value="">Select if applicable</option>
                    <option value="<$1k" {{ old('budget') === '<$1k' ? 'selected' : '' }}>Less than $1k</option>
                    <option value="$1k-$5k" {{ old('budget') === '$1k-$5k' ? 'selected' : '' }}>$1k - $5k</option>
                    <option value=">$5k" {{ old('budget') === '>$5k' ? 'selected' : '' }}>> $5k</option>
                </select>
                @error('budget')<p class="text-sm text-[#E05A47] mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Message & Source -->
            <div class="space-y-2">
                <label class="text-[10px] font-bold uppercase tracking-widest text-[#778da9]">Message <span class="text-[#E05A47]">*</span></label>
                <textarea name="message" rows="4" placeholder="Tell me about your project, question, or how I can help..." class="w-full p-4 bg-[#0d1b2a] rounded-2xl border border-[#415a77] focus:border-[#E05A47] outline-none transition-all text-[#e0e1dd]">{{ old('message') }}</textarea>
                @error('message')<p class="text-sm text-[#E05A47] mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-2">
                <label class="text-[10px] font-bold uppercase tracking-widest text-[#778da9]">How did you find me?</label>
                <select name="source" class="w-full p-4 bg-[#0d1b2a] rounded-2xl border border-[#415a77] focus:border-[#E05A47] outline-none text-[#e0e1dd]">
                    <option value="">Select an option</option>
                    <option value="LinkedIn" {{ old('source') === 'LinkedIn' ? 'selected' : '' }}>LinkedIn</option>
                    <option value="GitHub" {{ old('source') === 'GitHub' ? 'selected' : '' }}>GitHub</option>
                    <option value="Instagram" {{ old('source') === 'Instagram' ? 'selected' : '' }}>Instagram</option>
                    <option value="Other" {{ old('source') === 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('source')<p class="text-sm text-[#E05A47] mt-1">{{ $message }}</p>@enderror
            </div>
            
            <button class="px-10 py-4 bg-white text-[#0d1b2a] font-bold rounded-2xl hover:bg-gray-200 transition-all hover:scale-[1.02] flex items-center gap-2">
                Send Message <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>
    </div>

    <!-- Sidebar -->
    <div class="space-y-8">
        <!-- Quick Contact -->
        <div class="p-8 rounded-[2.5rem] bg-[#1b263b]/50 border border-[#415a77]">
            <h3 class="font-bold mb-6 text-[#e0e1dd]">Quick Contact</h3>
            <div class="space-y-6 text-sm">
                <div class="flex gap-4">
                    <div class="text-[#E05A47] text-lg"><i class="fa-solid fa-envelope"></i></div>
                    <div><span class="block text-[10px] uppercase text-[#778da9]">Email</span><a href="mailto:abdullah.term369@gmail.com" class="hover:text-[#E05A47]">abdullah.term369@gmail.com</a></div>
                </div>
                <div class="flex gap-4">
                    <div class="text-[#E05A47] text-lg"><i class="fa-solid fa-location-dot"></i></div>
                    <div><span class="block text-[10px] uppercase text-[#778da9]">Location</span><span class="text-[#e0e1dd]">Remote / Worldwide</span></div>
                </div>
                <div class="flex gap-4">
                    <div class="text-[#E05A47] text-lg"><i class="fa-solid fa-clock"></i></div>
                    <div><span class="block text-[10px] uppercase text-[#778da9]">Response Time</span><span class="text-[#e0e1dd]">Within 24-48 hours</span></div>
                </div>
            </div>
        </div>

        <!-- Connect Online -->
        <div class="p-8 rounded-[2.5rem] bg-[#1b263b]/50 border border-[#415a77]">
            <h3 class="font-bold mb-6 text-[#e0e1dd]">Connect Online</h3>
            <div class="space-y-4">
                <a href="https://github.com/A-dot614" target="_blank"   class="flex items-center gap-4 hover:text-[#E05A47]"><i class="fa-brands fa-github text-lg"></i> GitHub <span class="text-[#778da9] text-xs">@A-dot614</span></a>
                <a href="https://www.linkedin.com/in/abdullah-bin-mumtaz-70a98b382/" target="_blank" class="flex items-center gap-4 hover:text-[#E05A47]"><i class="fa-brands fa-linkedin text-lg"></i> LinkedIn <span class="text-[#778da9] text-xs">/in/abdullah-bin-mumtaz-dev</span></a>
                <a href="https://www.instagram.com/a_dot614?igsh=djY3dnExYjB6dDVk" target="_blank" class="flex items-center gap-4 hover:text-[#E05A47]"><i class="fa-brands fa-instagram text-lg"></i> Instagram <span class="text-[#778da9] text-xs">@A_dot614</span></a>
            </div>
        </div>

        <!-- Video Call -->
        <div class="p-8 rounded-[2.5rem] bg-[#1b263b]/50 border border-[#415a77]">
            <div class="text-[#E05A47] text-2xl mb-4"><i class="fa-solid fa-calendar"></i></div>
            <h3 class="font-bold mb-2">Prefer a Video Call?</h3>
            <p class="text-sm text-[#778da9] mb-6">Book a free 30-minute consultation to discuss your project in detail.</p>
            <a href="#" class="block text-center py-4 bg-white text-[#0d1b2a] font-bold rounded-2xl hover:bg-gray-200 transition-all">Schedule a Call</a>
        </div>
    </div>
</div>
        <!-- Terminal Footer -->
        <div class="p-8 rounded-[2.5rem] bg-[#0d1b2a] border border-[#415a77] font-mono shadow-2xl">
            <div class="flex gap-2 mb-6">
                <div class="w-3 h-3 rounded-full bg-[#E05A47]/50"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-500/50"></div>
                <div class="w-3 h-3 rounded-full bg-green-500/50"></div>
            </div>
            <div class="text-sm text-[#778da9]">
                <p class="mb-2"><span class="text-[#E05A47]">$</span> check_availability</p>
                <p class="text-[#e0e1dd]">&gt; Status: Open for new projects</p>
                <p class="text-[#e0e1dd]">&gt; Response time: &lt; 24h</p>
            </div>
        </div>
    </main>
</x-layouts.main>