<x-public-layout>

    <!-- 1. Hero Section -->
     <section class="bg-gray-800 text-white">
        <!-- Menggunakan flexbox untuk menata layout -->
        <div class="container mx-auto px-6 py-20 flex flex-col md:flex-row items-center">
            
            <!-- Kolom Kiri: Teks & Countdown -->
            <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">Selamat Datang di LONTARA 2025</h1>
                <p class="text-lg md:text-xl mt-4 text-gray-300">Konferensi terkemuka untuk para akademisi, peneliti, dan praktisi di bidang teknologi dan sains.</p>
                
                <!-- Countdown Timer -->
                <div id="countdown-timer" class="text-3xl md:text-4xl font-mono mt-8 mb-10" data-target-date="{{ $conferenceStartDate }}">
                    <span id="days">00</span> Hari
                    <span id="hours">00</span> Jam
                    <span id="minutes">00</span> Menit
                    <span id="seconds">00</span> Detik
                </div>

                <!-- Tombol Call to Action -->
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="{{ route('register') }}" class="px-8 py-3 bg-indigo-600 text-white font-bold rounded-full hover:bg-indigo-700 transition duration-300">
                        Daftar Sekarang!
                    </a>
                    <a href="{{ route('call-for-paper') }}" class="px-8 py-3 bg-gray-600 text-white font-bold rounded-full hover:bg-gray-700 transition duration-300">
                        Lihat Topik
                    </a>
                </div>
            </div>

            <!-- Kolom Kanan: Gambar Maskot -->
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('storage/img/Maskot_Lontara.png') }}" alt="Maskot LONTARA 2025" class="max-w-xs md:max-w-sm">
            </div>
        </div>
    </section>

    
    <!-- 2. About Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-800">Tentang LONTARA 2025</h2>
            <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>
            <p class="text-gray-600 leading-relaxed">
                LONTARA adalah sebuah platform tahunan yang mempertemukan para pemikir terbaik untuk berbagi ide, hasil penelitian, dan inovasi terbaru. Tahun ini, kami fokus pada tema "Inovasi Berkelanjutan untuk Masa Depan Digital" yang mencakup berbagai disiplin ilmu, mulai dari kecerdasan buatan hingga teknologi ramah lingkungan.
            </p>
        </div>
    </section>

<!-- 3. Keynote Speakers Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Keynote Speakers</h2>
        <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-12">
            @forelse($speakers as $speaker)
            <div class="bg-white p-6 rounded-lg shadow-lg">
                {{-- PERBARUI BARIS DI BAWAH INI --}}
                <img src="{{ Storage::url($speaker->image_path) }}" alt="{{ $speaker->name }}" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-xl font-bold text-gray-900">{{ $speaker->name }}</h3>
                <p class="text-gray-500">{{ $speaker->title }}</p>
            </div>
            @empty
            <p class="col-span-3 text-gray-500">Keynote speaker akan segera diumumkan.</p>
            @endforelse
        </div>
    </div>
</section>

    <!-- JavaScript untuk Countdown Timer -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const countdownElement = document.getElementById('countdown-timer');
            const targetDate = new Date(countdownElement.dataset.targetDate).getTime();

            const timer = setInterval(function() {
                const now = new Date().getTime();
                const distance = targetDate - now;

                if (distance < 0) {
                    clearInterval(timer);
                    countdownElement.innerHTML = "Konferensi Telah Dimulai!";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('days').innerText = String(days).padStart(2, '0');
                document.getElementById('hours').innerText = String(hours).padStart(2, '0');
                document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
                document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');

            }, 1000);
        });
    </script>
    @endpush

</x-public-layout>