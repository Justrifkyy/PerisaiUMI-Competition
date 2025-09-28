<x-public-layout>
    <div class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-800 text-center">Informasi Submission</h1>
                <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>

                <!-- Bagian Panduan Penulisan -->
                <div class="mt-8">
                    <h2 class="text-2xl font-bold text-gray-800">Panduan Umum Penulisan</h2>
                    <ul class="mt-4 list-disc list-inside text-gray-700 space-y-2">
                        <li>Paper harus ditulis dalam Bahasa Indonesia atau Bahasa Inggris yang baik dan benar.</li>
                        <li>Panjang Paper penuh antara 6 hingga 8 halaman, termasuk gambar, tabel, dan referensi.</li>
                        <li>Format penulisan harus mengikuti template resmi yang telah disediakan.</li>
                        <li>Semua kutipan dan referensi harus menggunakan gaya penulisan IEEE.</li>
                        <li>File yang diunggah harus dalam format PDF atau DOCX dengan ukuran maksimal 5 MB.</li>
                    </ul>
                </div>

                <!-- Bagian Kebijakan -->
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800">Kebijakan Penting</h2>
                    <ul class="mt-4 list-disc list-inside text-gray-700 space-y-2">
                        <li><strong>Plagiarisme:</strong> Semua Paper yang dikirim akan diperiksa menggunakan perangkat lunak pendeteksi plagiarisme. Paper yang terbukti melakukan plagiarisme akan langsung ditolak.</li>
                        <li><strong>Publikasi Ganda:</strong> Penulis menjamin bahwa karya yang dikirimkan belum pernah dipublikasikan sebelumnya dan tidak sedang dalam proses review di konferensi atau jurnal lain.</li>
                    </ul>
                </div>

                <!-- Bagian Template & Kontak -->
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800">Template & Kontak</h2>
                    <p class="mt-2 text-gray-600">Silakan unduh template di bawah ini untuk memastikan naskah Anda sesuai dengan format yang kami tentukan.</p>
                    
                    <div class="mt-4 space-y-4">
                        @foreach($templates as $template)
                        <div class="border p-4 rounded-lg flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-lg">{{ $template['name'] }}</h3>
                                <p class="text-sm text-gray-500">{{ $template['description'] }}</p>
                            </div>
                            @if($template['downloadable'])
                                <a href="{{ $template['url'] }}" download class="px-4 py-2 bg-indigo-600 text-white text-sm font-bold rounded-md hover:bg-indigo-700">
                                    Unduh
                                </a>
                            @else
                                <span class="px-4 py-2 bg-gray-300 text-gray-500 text-sm font-bold rounded-md cursor-not-allowed">
                                    Segera Hadir
                                </span>
                            @endif
                        </div>
                        @endforeach
                    </div>

                    <p class="mt-6 text-gray-700">Jika Anda memiliki pertanyaan lebih lanjut mengenai proses submission, jangan ragu untuk menghubungi kami melalui email di <a href="mailto:panitia@lontara2025.com" class="text-indigo-600 font-semibold hover:underline">panitia@lontara2025.com</a>.</p>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>