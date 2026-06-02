<x-layouts.main>
    <main class="max-w-4xl mx-auto px-6 py-20 text-[#e0e1dd]">
        
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold mb-2">Let's book a meeting</h1>
            <p class="text-[#778da9]">Select the type of session that fits your needs.</p>
        </div>

        @if(session('status'))
            <div class="mb-8 rounded-3xl bg-green-500/10 border border-green-500/20 p-6 text-center text-sm text-green-200">
                {{ session('status') }}
            </div>
        @endif

        <div class="flex items-center justify-center gap-8 mb-16">
            <div class="flex items-center gap-3 text-[#E05A47]">
                <div class="w-8 h-8 rounded-full bg-[#E05A47] text-white flex items-center justify-center font-bold text-sm">1</div>
                <span class="font-bold text-sm">Select Type</span>
            </div>
            <div class="h-[1px] w-12 bg-[#415a77]"></div>
            <div class="flex items-center gap-3 text-[#778da9]">
                <div class="w-8 h-8 rounded-full border border-[#415a77] flex items-center justify-center font-bold text-sm">2</div>
                <span class="text-sm">Pick Date & Time</span>
            </div>
            <div class="h-[1px] w-12 bg-[#415a77]"></div>
            <div class="flex items-center gap-3 text-[#778da9]">
                <div class="w-8 h-8 rounded-full border border-[#415a77] flex items-center justify-center font-bold text-sm">3</div>
                <span class="text-sm">Your Details</span>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <a href="{{ route('booking.date', ['type' => 'Discovery Call']) }}" class="text-left p-8 rounded-[2rem] bg-[#1b263b] border border-[#E05A47] hover:border-[#E05A47]/50 transition-all shadow-xl shadow-[#E05A47]/5">
                <div class="w-12 h-12 rounded-2xl bg-[#0d1b2a] flex items-center justify-center mb-6 text-[#E05A47] text-xl">
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-bold">Discovery Call</h3>
                    <span class="text-sm text-[#778da9]">30 min</span>
                </div>
                <p class="text-[#778da9] text-sm mb-6">A free 30-minute call to discuss your project and see if we're a good fit.</p>
                <div class="text-xs text-[#778da9] flex items-center gap-2">
                    <i class="fa-solid fa-video"></i> Google Meet
                </div>
            </a>

            <a href="{{ route('booking.date', ['type' => 'Consulting Session']) }}" class="text-left p-8 rounded-[2rem] bg-[#1b263b]/40 border border-[#415a77] hover:border-[#E05A47]/50 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-[#0d1b2a] flex items-center justify-center mb-6 text-[#E05A47] text-xl">
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-bold">Consulting Session</h3>
                    <span class="text-sm text-[#778da9]">60 min</span>
                </div>
                <p class="text-[#778da9] text-sm mb-6">A paid 1-hour deep-dive session for technical consulting and advice.</p>
                <div class="text-xs text-[#778da9] flex items-center gap-2">
                    <i class="fa-solid fa-video"></i> Zoom
                </div>
            </a>
        </div>

        <div class="text-center">
            <p class="text-sm text-[#778da9]">Choose a session type to continue to the next step.</p>
        </div>
    </main>
</x-layouts.main>
