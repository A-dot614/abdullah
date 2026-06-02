<x-layouts.main>
<!-- Step 3: Your Details -->
<div x-data="bookingDetails()" class="grid md:grid-cols-2 gap-8 mt-12">
    
    <!-- Left: Booking Summary Sidebar -->
    <div class="space-y-6">
        <div class="bg-[#1b263b] p-8 rounded-3xl border border-[#415a77]">
            <h3 class="text-xl font-bold mb-6">Booking Summary</h3>
            <div class="space-y-4">
                <div>
                    <p class="text-xs text-[#778da9] uppercase">Meeting Type</p>
                    <p class="font-semibold" x-text="selectedType || 'Not Selected'"></p>
                </div>
                <div>
                    <p class="text-xs text-[#778da9] uppercase">Duration</p>
                    <p class="font-semibold" x-text="selectedType === 'Consulting Session' ? '60 minutes' : '30 minutes'"></p>
                </div>
                <div>
                    <p class="text-xs text-[#778da9] uppercase">Date & Time</p>
                    <p class="font-semibold" x-text="selectedDate ? ('June ' + selectedDate + ', 2026 at ' + (selectedTime || '')) : 'Not selected'"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Right: Details Form -->
    <div class="bg-[#1b263b] p-8 rounded-3xl border border-[#415a77]">
        <form method="POST" action="{{ route('booking.submit') }}" class="space-y-4">
            @csrf
            <input type="hidden" name="name" :value="fullName" />
            <input type="hidden" name="subject" :value="selectedType" />
            <input type="hidden" name="date" :value="selectedDate" />
            <input type="hidden" name="time" :value="selectedTime" />

            <div class="grid grid-cols-2 gap-4">
                <input x-model="firstName" name="first_name" type="text" placeholder="First Name" class="w-full p-4 rounded-xl bg-[#0d1b2a] border border-[#415a77] focus:border-[#E05A47] outline-none text-white" required>
                <input x-model="lastName" name="last_name" type="text" placeholder="Last Name" class="w-full p-4 rounded-xl bg-[#0d1b2a] border border-[#415a77] focus:border-[#E05A47] outline-none text-white" required>
            </div>
            <input name="email" type="email" placeholder="Email Address" class="w-full p-4 rounded-xl bg-[#0d1b2a] border border-[#415a77] focus:border-[#E05A47] outline-none text-white" required>
            <input name="phone" type="tel" placeholder="Phone Number" class="w-full p-4 rounded-xl bg-[#0d1b2a] border border-[#415a77] focus:border-[#E05A47] outline-none text-white">
            <input name="company" type="text" placeholder="Company Name" class="w-full p-4 rounded-xl bg-[#0d1b2a] border border-[#415a77] focus:border-[#E05A47] outline-none text-white">
            <textarea name="message" placeholder="What would you like to discuss?" class="w-full p-4 rounded-xl bg-[#0d1b2a] border border-[#415a77] focus:border-[#E05A47] outline-none text-white h-24" required></textarea>
            
            <button type="submit" class="w-full py-4 bg-[#E05A47] text-white font-bold rounded-2xl hover:bg-[#c94d3d] transition-all">
                Confirm Booking
            </button>
        </form>
        <p class="text-center text-xs text-[#778da9] mt-6">By booking, you agree to our terms and conditions.</p>
    </div>
</div>

<script>
    function bookingDetails() {
        return {
            selectedType: '{{ addslashes($selectedType ?? '') }}',
            selectedDate: '{{ addslashes($selectedDate ?? '') }}',
            selectedTime: '{{ addslashes($selectedTime ?? '') }}',
            firstName: '',
            lastName: '',
            get fullName() {
                return [this.firstName, this.lastName].filter(Boolean).join(' ').trim();
            }
        };
    }
</script>
</x-layouts.main>
