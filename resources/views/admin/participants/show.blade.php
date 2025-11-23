{{-- resources/views/admin/participants/show.blade.php --}}
<x-admin-layout>
    <x-slot name="header">
        Detail Tim: {{ $registration->team_name }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- KOLOM KIRI: Data Tim -->
        <div class="md:col-span-2 space-y-6">
            <!-- Informasi Dasar -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold border-b pb-2 mb-4">Informasi Tim & Ketua</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Nama Tim</p>
                        <p class="font-medium">{{ $registration->team_name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Kategori Lomba</p>
                        <p class="font-medium">{{ $registration->participant_type }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Nama Ketua</p>
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
                    <div>
                        <p class="text-sm text-gray-500">Email Akun</p>
                        <p class="font-medium">{{ $registration->user->email }}</p>
                    </div>
                    @if($registration->research_field)
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-500">Subtema / Bidang</p>
                        <p class="font-medium">{{ $registration->research_field }}</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Berkas Lomba (INTI DARI PERUBAHAN) -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold border-b pb-2 mb-4">Berkas Kompetisi</h3>
                <div class="space-y-3">
                    <!-- Proposal -->
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded border">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            <div>
                                <p class="text-sm font-bold text-gray-700">Proposal Bisnis</p>
                                <p class="text-xs text-gray-500">Dokumen Utama</p>
                            </div>
                        </div>
                        <a href="{{ Storage::url($registration->proposal_path) }}" target="_blank" class="px-3 py-1 bg-indigo-600 text-white text-xs rounded hover:bg-indigo-700">Lihat/Download</a>
                    </div>

                    <!-- BMC -->
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded border">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            <div>
                                <p class="text-sm font-bold text-gray-700">Business Model Canvas (BMC)</p>
                                <p class="text-xs text-gray-500">Dokumen Pendukung</p>
                            </div>
                        </div>
                        <a href="{{ Storage::url($registration->bmc_path) }}" target="_blank" class="px-3 py-1 bg-indigo-600 text-white text-xs rounded hover:bg-indigo-700">Lihat/Download</a>
                    </div>

                    <!-- KTM -->
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded border">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                            <div>
                                <p class="text-sm font-bold text-gray-700">Scan KTM Anggota</p>
                                <p class="text-xs text-gray-500">Identitas Tim</p>
                            </div>
                        </div>
                        <a href="{{ Storage::url($registration->ktm_path) }}" target="_blank" class="px-3 py-1 bg-gray-600 text-white text-xs rounded hover:bg-gray-700">Lihat</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN: Bukti Syarat & Status -->
        <div class="space-y-6">
            <!-- Bukti Syarat -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold border-b pb-2 mb-4">Bukti Persyaratan</h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Bukti Share Pamflet</p>
                        <a href="{{ Storage::url($registration->share_pamflet_path) }}" target="_blank">
                            <img src="{{ Storage::url($registration->share_pamflet_path) }}" class="w-full h-24 object-cover rounded border hover:opacity-75 transition">
                        </a>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Bukti Twibbon</p>
                        <a href="{{ Storage::url($registration->twibbon_path) }}" target="_blank">
                            <img src="{{ Storage::url($registration->twibbon_path) }}" class="w-full h-24 object-cover rounded border hover:opacity-75 transition">
                        </a>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Bukti Follow Medsos</p>
                        <a href="{{ Storage::url($registration->follow_medsos_path) }}" target="_blank">
                            <img src="{{ Storage::url($registration->follow_medsos_path) }}" class="w-full h-24 object-cover rounded border hover:opacity-75 transition">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Status Pembayaran (Read Only di sini) -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Status Pembayaran</h3>
                @if($registration->payment)
                    @if($registration->payment->status == 'Verified')
                        <div class="bg-green-100 text-green-800 p-3 rounded text-center font-bold">LUNAS (Verified)</div>
                    @elseif($registration->payment->status == 'Rejected')
                        <div class="bg-red-100 text-red-800 p-3 rounded text-center font-bold">DITOLAK</div>
                    @else
                        <div class="bg-yellow-100 text-yellow-800 p-3 rounded text-center font-bold">MENUNGGU VERIFIKASI</div>
                    @endif
                    <div class="mt-3 text-center">
                        <a href="{{ route('admin.payments.index') }}" class="text-sm text-indigo-600 hover:underline">Kelola di Menu Pembayaran &rarr;</a>
                    </div>
                @else
                    <div class="bg-gray-100 text-gray-500 p-3 rounded text-center">Belum Upload Bukti</div>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>