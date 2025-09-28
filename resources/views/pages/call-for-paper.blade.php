<x-public-layout>
    <div class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-800 text-center">Call For Paper</h1>
                <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>

                <div class="mt-8 text-gray-700 leading-relaxed space-y-4">
                    <p>
                        Panitia LONTARA 2025 dengan bangga mengundang para peneliti, akademisi, profesional, dan mahasiswa untuk mengirimkan hasil penelitian asli mereka dalam bentuk makalah penuh (full paper) atau abstrak. Konferensi ini bertujuan untuk menjadi wadah diskusi dan penyebaran inovasi terbaru di berbagai bidang ilmu komputer dan teknologi informasi.
                    </p>
                    <p>
                        Semua makalah yang dikirimkan akan melalui proses *peer-review* yang ketat oleh komite ilmiah kami. Makalah yang diterima dan dipresentasikan akan dipublikasikan dalam prosiding konferensi ber-ISBN. Makalah terpilih juga akan direkomendasikan untuk publikasi di jurnal mitra terindeks.
                    </p>
                </div>

                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800">Topik dan Bidang Penelitian</h2>
                    <p class="mt-2 text-gray-600">Kami menyambut kiriman dalam topik-topik berikut (namun tidak terbatas pada):</p>
                    <ul class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2">
                        @foreach($topics as $topic)
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-indigo-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>{{ $topic }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>