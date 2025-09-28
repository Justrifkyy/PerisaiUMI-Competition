<x-public-layout>
    <div class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-800 text-center">Tentang LONTARA 2025</h1>
                <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>

                <!-- Bagian Visi & Misi -->
                <div class="mt-8 text-gray-700 leading-relaxed space-y-4">
                    <p>
                        LONTARA adalah singkatan dari "Locus of Networking, Technology, and Research Advancement", sebuah konferensi ilmiah internasional tahunan yang didedikasikan untuk menjadi titik temu bagi para pemikir, inovator, dan pemimpin di bidang teknologi. Misi kami adalah untuk mengakselerasi kemajuan penelitian dan mendorong kolaborasi lintas disiplin yang dapat memberikan solusi nyata bagi tantangan global.
                    </p>
                    <p>
                        Kami percaya bahwa dengan mempertemukan para ahli dari berbagai latar belakang—akademisi, industri, dan pemerintah—kita dapat menciptakan sinergi yang kuat untuk masa depan yang lebih baik.
                    </p>
                </div>

                <!-- Bagian Lokasi/Venue -->
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800">Lokasi Acara</h2>
                    <div class="mt-4 p-6 border rounded-lg">
                        <p class="font-semibold text-lg">Auditorium Menara Phinisi UNM</p>
                        <p class="text-gray-600">Jl. A. P. Pettarani, Tidung, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90222</p>
                        <div class="mt-4 aspect-w-16 aspect-h-9">
                            <!-- Placeholder untuk Google Maps Embed -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.714937207436!2d119.4503293153327!3d-5.148813953594803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd41aaaaaaab%3A0x2a685e1a27b14035!2sMenara%20Phinisi%20UNM!5e0!3m2!1sen!2sid!4v1664282830180!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Bagian Panitia -->
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800">Panitia Penyelenggara</h2>
                    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-8">
                        @foreach($committee as $member)
                            <div class="bg-gray-50 p-4 rounded-lg text-center">
                                <p class="font-bold text-gray-900">{{ $member['name'] }}</p>
                                <p class="text-sm text-indigo-600">{{ $member['role'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>