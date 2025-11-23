<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Tim
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-8 border-green-500 flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-12 w-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-2xl font-bold text-gray-900">Pendaftaran Berhasil & Terverifikasi!</h3>
                    <div class="mt-2 text-gray-600">
                        <p>Halo, <strong>{{ Auth::user()->name }}</strong>!</p>
                        <p class="mt-1">
                            Tim <strong>{{ $registration->team_name }}</strong> telah resmi terdaftar dalam kategori 
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                {{ $registration->participant_type }}
                            </span>.
                        </p>
                        <p class="mt-2 text-sm">Pembayaran Anda telah kami terima. Silakan tunggu pengumuman selanjutnya terkait hasil seleksi berkas.</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                        <h3 class="text-lg font-semibold text-gray-800">Identitas Tim</h3>
                    </div>
                    <div class="p-6 text-gray-900 space-y-4">
                        <div>
                            <p class="text-sm text-gray-500">Nama Tim</p>
                            <p class="font-medium text-lg">{{ $registration->team_name }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Ketua Tim</p>
                            <p class="font-medium">{{ $registration->full_name }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Institusi</p>
                            <p class="font-medium">{{ $registration->institution }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Kontak WA</p>
                            <p class="font-medium">{{ $registration->phone_number }}</p>
                        </div>
                        @if($registration->research_field)
                        <div>
                            <p class="text-sm text-gray-500">Subtema/Fokus</p>
                            <p class="font-medium">{{ $registration->research_field }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                        <h3 class="text-lg font-semibold text-gray-800">Berkas Kompetisi</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-500 mb-4">Berikut adalah berkas yang telah Anda unggah saat pendaftaran:</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-blue-50 rounded-md border border-blue-100">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    <span class="text-sm font-medium text-blue-900">Proposal Bisnis</span>
                                </div>
                                <a href="{{ Storage::url($registration->proposal_path) }}" target="_blank" class="text-xs bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Lihat</a>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-indigo-50 rounded-md border border-indigo-100">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    <span class="text-sm font-medium text-indigo-900">Business Model Canvas</span>
                                </div>
                                <a href="{{ Storage::url($registration->bmc_path) }}" target="_blank" class="text-xs bg-indigo-600 text-white px-3 py-1 rounded hover:bg-indigo-700">Lihat</a>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-md border border-gray-200">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                                    <span class="text-sm font-medium text-gray-700">Scan KTM Tim</span>
                                </div>
                                <a href="{{ Storage::url($registration->ktm_path) }}" target="_blank" class="text-xs bg-gray-600 text-white px-3 py-1 rounded hover:bg-gray-700">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>