<x-layouts.main>
<!-- Step 2: Date & Time -->
<div x-data="bookingCalendar()" class="space-y-6">

    <div class="grid md:grid-cols-2 gap-8 bg-[#1b263b] p-8 rounded-3xl border border-[#415a77]">
        
        <!-- Left: Calendar -->
        <div>
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-lg">{{ $selectedType ?? 'Booking' }}</h3>
                <a href="{{ route('booking') }}" class="text-sm text-[#778da9] hover:text-white">← Change type</a>
            </div>
            
            <div class="grid grid-cols-7 gap-2 text-center text-sm text-[#778da9] mb-4">
                <div>Su</div><div>Mo</div><div>Tu</div><div>We</div><div>Th</div><div>Fr</div><div>Sa</div>
            </div>
            
            <div class="grid grid-cols-7 gap-2">
                <template x-for="day in 31" :key="day">
                    <button 
                        type="button"
                        @click="selectedDate = day; updateUrl()"
                        :class="selectedDate === day ? 'bg-[#E05A47] text-white' : 'hover:bg-[#415a77]'"
                        class="w-full aspect-square rounded-full flex items-center justify-center text-sm transition-all">
                        <span x-text="day"></span>
                    </button>
                </template>
            </div>
        </div>

        <!-- Right: Time Slots -->
        <div>
            <p class="text-[#778da9] mb-4 text-sm">Available times for selected date</p>
            <div class="grid grid-cols-2 gap-3 h-[300px] overflow-y-auto pr-2 custom-scrollbar">
                <template x-for="time in timeSlots" :key="time">
                    <button 
                        type="button"
                        @click="selectedTime = time; updateUrl()"
                        :class="selectedTime === time ? 'border-[#E05A47] bg-[#E05A47]/10' : 'border-[#415a77] hover:border-[#E05A47]'"
                        class="p-3 border rounded-xl text-center text-sm transition-all">
                        <span x-text="time"></span>
                    </button>
                </template>
            </div>
        </div>
    </div>

    <!-- Timezone & Footer -->
    <div class="bg-[#1b263b] p-6 rounded-3xl border border-[#415a77]">
        <label class="block text-xs text-[#778da9] mb-2 uppercase tracking-wider">Timezone</label>
        <select class="w-full bg-[#0d1b2a] border border-[#415a77] p-3 rounded-xl text-white outline-none">
            <option>Eastern Time (ET)</option>
            <option>Berlin (CET)</option>
            <option>Dubai (GST)</option>
        </select>
    </div>

    <div class="flex justify-between mt-8">
        <a href="{{ route('booking') }}" class="text-[#778da9] hover:text-white px-6">← Back</a>
        <a :href="detailsUrl" 
           :class="['px-8 py-3 font-bold rounded-2xl transition-all', !selectedDate || !selectedTime ? 'bg-[#415a77] text-[#778da9] pointer-events-none opacity-50' : 'bg-[#E05A47] text-white']">
            Continue
        </a>
    </div>
</div>    

<script>
    function bookingCalendar() {
        return {
            selectedType: '{{ addslashes($selectedType ?? '') }}',
            selectedDate: null,
            selectedTime: null,
            timeSlots: ['9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM', '11:00 AM', '11:30 AM', '12:00 PM', '12:30 PM'],
            detailsUrl: '#',
            updateUrl() {
                if (this.selectedType && this.selectedDate && this.selectedTime) {
                    this.detailsUrl = '{{ route('booking.details') }}?type=' + encodeURIComponent(this.selectedType) + '&date=' + encodeURIComponent(this.selectedDate) + '&time=' + encodeURIComponent(this.selectedTime);
                } else {
                    this.detailsUrl = '#';
                }
            }
        }
    }
</script>
</x-layouts.main>
