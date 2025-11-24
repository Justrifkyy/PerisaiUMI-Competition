<x-public-layout>
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-gray-900">Jadwal & Rundown Acara</h1>
                    <div class="w-24 h-1 bg-indigo-500 mx-auto my-4"></div>
                    <p class="text-gray-600">
                        Catat tanggal-tanggal penting dan simak detail kegiatan LONTARA 2025.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Timeline Kegiatan
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-4 w-4 rounded-full bg-green-500 mt-1.5 mr-4"></div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Pendaftaran Dibuka</p>
                                <p class="text-lg font-bold text-gray-900">{{ \Carbon\Carbon::parse($settings['registration_opens_date'])->format('d F Y') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-4 w-4 rounded-full bg-yellow-500 mt-1.5 mr-4"></div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Batas Submit Proposal</p>
                                <p class="text-lg font-bold text-gray-900">{{ \Carbon\Carbon::parse($settings['submission_deadline_date'])->format('d F Y') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-4 w-4 rounded-full bg-red-500 mt-1.5 mr-4"></div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Pendaftaran Ditutup</p>
                                <p class="text-lg font-bold text-gray-900">{{ \Carbon\Carbon::parse($settings['registration_closes_date'])->format('d F Y') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-4 w-4 rounded-full bg-indigo-500 mt-1.5 mr-4"></div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Pelaksanaan Lomba & Expo</p>
                                <p class="text-lg font-bold text-gray-900">
                                    {{ \Carbon\Carbon::parse($settings['conference_starts_date'])->format('d F Y') }} - 
                                    {{ \Carbon\Carbon::parse($settings['conference_ends_date'])->format('d F Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Rundown Acara</h2>
                <div class="space-y-8">
                    
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden border-l-8 border-blue-500">
                        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
                            <h3 class="text-xl font-bold text-blue-800">Hari Pertama: Persiapan</h3>
                            <p class="text-gray-500">Minggu, 12 Januari 2025</p>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-4">
                                <li class="flex">
                                    <span class="w-32 font-mono text-sm text-gray-500">08.00 - 09.00</span>
                                    <span class="font-medium">Registrasi Peserta & Pengambilan ID Card</span>
                                </li>
                                <li class="flex">
                                    <span class="w-32 font-mono text-sm text-gray-500">09.00 - 10.00</span>
                                    <span class="font-medium">Technical Meeting & Penjelasan Mekanisme</span>
                                </li>
                                <li class="flex">
                                    <span class="w-32 font-mono text-sm text-gray-500">10.00 - 16.00</span>
                                    <span class="font-medium">Dekorasi dan Penataan Booth Peserta</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm overflow-hidden border-l-8 border-indigo-500">
                        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
                            <h3 class="text-xl font-bold text-indigo-800">Hari Kedua: Opening, Talkshow & Presentasi</h3>
                            <p class="text-gray-500">Senin, 13 Januari 2025</p>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-4">
                                <li class="flex">
                                    <span class="w-32 font-mono text-sm text-gray-500">08.00 - 09.30</span>
                                    <span class="font-medium">Pembukaan Acara & Sambutan Rektor UMI</span>
                                </li>
                                <li class="flex bg-yellow-50 p-2 rounded">
                                    <span class="w-32 font-mono text-sm text-gray-500 font-bold">10.00 - 11.30</span>
                                    <span class="font-bold text-yellow-800">Talkshow: "Green Tech Revolution"</span>
                                </li>
                                <li class="flex">
                                    <span class="w-32 font-mono text-sm text-gray-500">13.00 - 16.00</span>
                                    <span class="font-medium">Sesi Presentasi Bisnis (Pitching) Tim 1-10</span>
                                </li>
                                <li class="flex">
                                    <span class="w-32 font-mono text-sm text-gray-500">16.00 - 16.30</span>
                                    <span class="font-medium">Penjurian Langsung di Booth (In-Tenant Judging)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm overflow-hidden border-l-8 border-purple-500">
                        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
                            <h3 class="text-xl font-bold text-purple-800">Hari Ketiga: Awarding & Closing</h3>
                            <p class="text-gray-500">Selasa, 14 Januari 2025</p>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-4">
                                <li class="flex">
                                    <span class="w-32 font-mono text-sm text-gray-500">08.05 - 08.30</span>
                                    <span class="font-medium">Penampilan Spesial UKM Seni UMI</span>
                                </li>
                                <li class="flex bg-purple-50 p-2 rounded">
                                    <span class="w-32 font-mono text-sm text-gray-500 font-bold">09.00 - 09.45</span>
                                    <span class="font-bold text-purple-800">Pengumuman Juara & Penyerahan Hadiah</span>
                                </li>
                                <li class="flex">
                                    <span class="w-32 font-mono text-sm text-gray-500">11.30 - 12.00</span>
                                    <span class="font-medium">Penutupan LONTARA 2025 & Farewell</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-public-layout>