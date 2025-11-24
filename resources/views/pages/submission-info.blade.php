<x-public-layout>
    <div class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-800 text-center">Informasi Submission & Panduan</h1>
                <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>

                <div class="mt-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Struktur Proposal Bisnis</h2>
                    <p class="text-gray-600 mb-4">Proposal bisnis harus disusun dengan format yang jelas dan sistematis, mencakup poin-poin berikut:</p>
                    <ul class="list-decimal list-inside text-gray-700 space-y-3 bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <li><strong>Cover/Judul:</strong> Mencantumkan nama tim dan asal perguruan tinggi dengan jelas.</li>
                        <li><strong>Executive Summary:</strong> Ringkasan singkat namun padat mengenai ide bisnis secara keseluruhan.</li>
                        <li><strong>Pendahuluan:</strong> Latar belakang masalah, urgensi, dan tujuan dari usaha yang diusulkan.</li>
                        <li><strong>Deskripsi Produk:</strong> Penjelasan detail produk/jasa, proses pembuatan, dan keunggulan kompetitif (USP).</li>
                        <li><strong>Business Model Canvas (BMC):</strong> Penjelasan 9 elemen bisnis (dilampirkan terpisah atau dalam bab ini).</li>
                        <li><strong>Penutup:</strong> Kesimpulan yang meyakinkan juri mengapa ide ini layak menang.</li>
                    </ul>
                </div>

                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Ketentuan Teknis Berkas</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-blue-50 p-5 rounded-lg border border-blue-100">
                            <h3 class="font-bold text-blue-800 mb-2">Format File</h3>
                            <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                                <li>Proposal: PDF (Maksimal 15 MB)</li>
                                <li>BMC: PDF (Maksimal 10 MB)</li>
                                <li>KTM: PDF Gabungan (Maksimal 5 MB)</li>
                            </ul>
                        </div>
                        <div class="bg-green-50 p-5 rounded-lg border border-green-100">
                            <h3 class="font-bold text-green-800 mb-2">Ketentuan Penulisan</h3>
                            <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                                <li>Bahasa Indonesia yang baik dan benar (PUEBI).</li>
                                <li>Font: Times New Roman / Arial, Ukuran 12.</li>
                                <li>Spasi 1.5, Rata Kanan-Kiri (Justify).</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800">Kebijakan Kompetisi</h2>
                    <ul class="mt-4 list-disc list-inside text-gray-700 space-y-2">
                        <li><strong>Orisinalitas:</strong> Karya harus asli buatan tim, belum pernah dipublikasikan, dan bebas plagiarisme (maksimal 20%).</li>
                        <li><strong>Belum Pernah Juara:</strong> Ide bisnis yang diajukan belum pernah memenangkan kompetisi sejenis di tingkat nasional.</li>
                        <li><strong>Diskualifikasi:</strong> Panitia berhak mendiskualifikasi tim yang terbukti melanggar hak cipta atau melakukan kecurangan.</li>
                    </ul>
                </div>

                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800">Download Template</h2>
                    <p class="mt-2 text-gray-600">Gunakan template resmi di bawah ini agar format proposal Anda sesuai dengan standar penilaian juri.</p>
                    
                    <div class="mt-4 space-y-4">
                        @foreach($templates as $template)
                        <div class="border p-4 rounded-lg flex items-center justify-between hover:bg-gray-50 transition">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-indigo-100 text-indigo-600 rounded flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">{{ $template['name'] }}</h3>
                                    <p class="text-sm text-gray-500">{{ $template['description'] }}</p>
                                </div>
                            </div>
                            @if($template['downloadable'])
                                <a href="{{ $template['url'] }}" download class="px-4 py-2 bg-indigo-600 text-white text-sm font-bold rounded-md hover:bg-indigo-700 shadow-sm">
                                    Unduh
                                </a>
                            @else
                                <span class="px-4 py-2 bg-gray-200 text-gray-500 text-sm font-bold rounded-md cursor-not-allowed">
                                    Segera Hadir
                                </span>
                            @endif
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-8 p-4 bg-indigo-50 rounded-lg border border-indigo-100 text-center">
                        <p class="text-indigo-900 font-medium">Masih bingung atau punya pertanyaan?</p>
                        <p class="text-sm text-indigo-700 mt-1">Hubungi panitia via email: <a href="mailto:panitia@lontara2025.com" class="underline hover:text-indigo-900">panitia@lontara2025.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>