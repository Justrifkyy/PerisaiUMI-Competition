<x-public-layout>

    <section class="bg-gray-800 text-white">
        <div class="container mx-auto px-6 py-20 flex flex-col md:flex-row items-center">
            
            <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">Selamat Datang di LONTARA 2025</h1>
                <p class="text-lg md:text-xl mt-4 text-gray-300">
                    Green Tech Revolution: Membangun Masa Depan dengan Teknologi Cerdas. Ajang kompetisi nasional bagi mahasiswa inovatif.
                </p>
                
                <div id="countdown-timer" class="text-3xl md:text-4xl font-mono mt-8 mb-10" data-target-date="{{ $conferenceStartDate }}">
                    <span id="days">00</span> Hari
                    <span id="hours">00</span> Jam
                    <span id="minutes">00</span> Menit
                    <span id="seconds">00</span> Detik
                </div>

                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="{{ route('register') }}" class="px-8 py-3 bg-indigo-600 text-white font-bold rounded-full hover:bg-indigo-700 transition duration-300">
                        Daftar Lomba
                    </a>
                    <a href="{{ route('call-for-paper') }}" class="px-8 py-3 bg-gray-600 text-white font-bold rounded-full hover:bg-gray-700 transition duration-300">
                        Lihat Panduan
                    </a>
                </div>
            </div>

            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('storage/img/Maskot_Lontara.png') }}" alt="Maskot LONTARA 2025" class="max-w-xs md:max-w-sm drop-shadow-2xl animate-pulse">
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-800">Tentang LONTARA 2025</h2>
            <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>
            <p class="text-gray-600 leading-relaxed text-lg">
                LONTARA 2025 merupakan ajang nasional yang dirancang sebagai titik temu antara teknologi, kreativitas, dan kepedulian lingkungan. Kegiatan ini digagas oleh UKM PERISAI Universitas Muslim Indonesia (UMI) dengan semangat bahwa mahasiswa bukan hanya pengguna teknologi, tetapi juga pencipta solusi.
            </p>
            <p class="text-gray-600 leading-relaxed mt-4">
                Tahun ini, LONTARA hadir dengan konsep baru berupa <strong>Lomba Kewirausahaan dan Expo Bisnis</strong>, yang menggabungkan semangat riset, inovasi, serta implementasi nyata di dunia usaha.
            </p>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Dewan Juri & Narasumber</h2>
            <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-12">
                @forelse($speakers as $speaker)
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <img src="{{ Storage::url($speaker->image_path) }}" alt="{{ $speaker->name }}" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-indigo-100">
                    <h3 class="text-xl font-bold text-gray-900">{{ $speaker->name }}</h3>
                    <p class="text-indigo-600 font-medium">{{ $speaker->title }}</p>
                </div>
                @empty
                <div class="col-span-3 text-center py-10">
                    <p class="text-gray-500 text-lg">Dewan Juri dan Narasumber akan segera kami umumkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const countdownElement = document.getElementById('countdown-timer');
            
            // Pastikan targetDate valid sebelum menjalankan timer
            if (!countdownElement || !countdownElement.dataset.targetDate) return;

            const targetDate = new Date(countdownElement.dataset.targetDate).getTime();

            const timer = setInterval(function() {
                const now = new Date().getTime();
                const distance = targetDate - now;

                if (distance < 0) {
                    clearInterval(timer);
                    countdownElement.innerHTML = "<span class='text-red-500'>Pendaftaran Telah Ditutup!</span>";
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