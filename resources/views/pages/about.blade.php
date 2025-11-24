<x-public-layout>
    <div class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-800 text-center">Tentang LONTARA 2025</h1>
                <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>

                <div class="mt-8 text-gray-700 leading-relaxed space-y-4 text-justify">
                    <p>
                        LONTARA 2025 merupakan ajang nasional yang menjadi wadah kolaborasi mahasiswa dan pengusaha untuk menghadirkan solusi inovatif berbasis teknologi dan keberlanjutan. Tahun ini, LONTARA hadir dengan konsep baru berupa lomba kewirausahaan dan expo bisnis, yang menggabungkan semangat riset, inovasi, serta implementasi nyata di dunia usaha. Kegiatan ini digagas oleh UKM PERISAI Universitas Muslim Indonesia (UMI).
                    </p>
                    <p>
                        Kami percaya bahwa dengan mempertemukan mahasiswa, mentor, dan pelaku usaha dari berbagai daerah, kita dapat menciptakan ekosistem kewirausahaan yang berkelanjutan. LONTARA 2025 bukan hanya sekadar kompetisi, melainkan ruang inspiratif bagi generasi muda untuk menampilkan gagasan dan karya nyata dalam menjawab tantangan masa depan, mulai dari efisiensi energi hingga pengelolaan limbah berbasis teknologi.
                    </p>
                </div>

                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800">Lokasi Acara</h2>
                    <div class="mt-4 p-6 border rounded-lg shadow-sm">
                        <p class="font-semibold text-lg">GOR Universitas Muslim Indonesia (UMI)</p>
                        <p class="text-gray-600">Jl. Urip Sumoharjo No.KM.05, Panaikang, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan</p>
                        
                        <div class="mt-4 aspect-w-16 aspect-h-9">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.807522767766!2d119.44634597452036!3d-5.13466965193633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee306d5c606b3%3A0x507203320f23e65e!2sUniversitas%20Muslim%20Indonesia!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                                width="100%" 
                                height="350" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Panitia Penyelenggara</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach($committee as $member)
                           <div class="bg-gray-50 p-6 rounded-lg text-center border border-gray-100 hover:shadow-md transition duration-300">
                            <div class="h-24 w-24 rounded-full overflow-hidden mx-auto mb-3 border-4 border-white shadow-sm">
                                <img src="{{ Storage::url($member->image_path) }}" alt="{{ $member->name }}" class="h-full w-full object-cover">
                            </div>

                            <p class="font-bold text-gray-900 text-lg">{{ $member->name }}</p>
                            <p class="text-sm text-indigo-600 font-medium">{{ $member->role }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-public-layout>