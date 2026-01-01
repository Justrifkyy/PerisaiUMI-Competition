{{-- resources/views/admin/participants/show.blade.php --}}
<x-admin-layout>
    <x-slot name="header">
        Detail Tim: {{ $registration->team_name }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('admin.participants.index') }}" class="mb-4 inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Daftar
            </a>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="md:col-span-2 space-y-6">
                    
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 border-b pb-2 mb-4">Informasi Tim & Ketua</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Nama Tim</p>
                                <p class="font-bold text-gray-900 text-lg">{{ $registration->team_name }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Kategori Lomba</p>
                                @if($registration->participant_type == 'Tahap Awal')
                                    <span class="inline-flex mt-1 items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Early Stage</span>
                                @else
                                    <span class="inline-flex mt-1 items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Running Stage</span>
                                @endif
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Nama Ketua</p>
                                <p class="font-medium text-gray-900">{{ $registration->full_name }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">NIM Ketua</p>
                                <p class="font-medium text-gray-900">{{ $registration->nim ?? '-' }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Institusi</p>
                                <p class="font-medium text-gray-900">{{ $registration->institution }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Jurusan Ketua</p>
                                <p class="font-medium text-gray-900">{{ $registration->major ?? '-' }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Kontak WA</p>
                                <p class="font-medium text-gray-900">{{ $registration->phone_number }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Email Akun</p>
                                <p class="font-medium text-gray-900">{{ $registration->user->email }}</p>
                            </div>
                            @if($registration->research_field)
                            <div class="md:col-span-2">
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Subtema / Bidang</p>
                                <p class="font-medium text-gray-900">{{ $registration->research_field }}</p>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 border-b pb-2 mb-4">Daftar Anggota Tim</h3>
                        
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm text-left">
                                <thead class="bg-gray-50 text-gray-500 font-bold uppercase text-xs">
                                    <tr>
                                        <th class="px-4 py-3 rounded-tl-lg">No</th>
                                        <th class="px-4 py-3">Nama Lengkap</th>
                                        <th class="px-4 py-3">NIM / NPM</th>
                                        <th class="px-4 py-3 rounded-tr-lg">Program Studi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    {{-- Baris Ketua (Opsional, jika ingin menampilkan ketua di tabel juga) --}}
                                    <tr class="bg-yellow-50">
                                        <td class="px-4 py-3 font-bold text-yellow-600">Ketua</td>
                                        <td class="px-4 py-3 font-semibold text-gray-900">{{ $registration->full_name }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $registration->nim ?? '-' }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $registration->major ?? '-' }}</td>
                                    </tr>

                                    {{-- Loop Anggota Tambahan --}}
                                    @forelse($registration->teamMembers as $index => $member)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-3 text-gray-500">{{ $index + 1 }}</td>
                                        <td class="px-4 py-3 font-medium text-gray-900">{{ $member->name }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $member->nim }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $member->major }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-4 text-center text-gray-400 italic">
                                            Tidak ada anggota tambahan (Tim Tunggal/Ketua saja).
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 border-b pb-2 mb-4">Berkas Kompetisi</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200 hover:border-indigo-300 transition">
                                <div class="flex items-center">
                                    <div class="p-2 bg-red-100 rounded-lg mr-3">
                                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-800">Proposal Bisnis</p>
                                        <p class="text-xs text-gray-500">File PDF • Dokumen Utama</p>
                                    </div>
                                </div>
                                <a href="{{ Storage::url($registration->proposal_path) }}" target="_blank" class="px-4 py-2 bg-indigo-600 text-white text-xs font-bold rounded-md hover:bg-indigo-700 transition shadow-sm">
                                    Download
                                </a>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200 hover:border-indigo-300 transition">
                                <div class="flex items-center">
                                    <div class="p-2 bg-blue-100 rounded-lg mr-3">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-800">Business Model Canvas (BMC)</p>
                                        <p class="text-xs text-gray-500">File PDF • Dokumen Pendukung</p>
                                    </div>
                                </div>
                                <a href="{{ Storage::url($registration->bmc_path) }}" target="_blank" class="px-4 py-2 bg-indigo-600 text-white text-xs font-bold rounded-md hover:bg-indigo-700 transition shadow-sm">
                                    Download
                                </a>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200 hover:border-indigo-300 transition">
                                <div class="flex items-center">
                                    <div class="p-2 bg-green-100 rounded-lg mr-3">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-800">Scan KTM Anggota</p>
                                        <p class="text-xs text-gray-500">File PDF • Identitas Tim</p>
                                    </div>
                                </div>
                                <a href="{{ Storage::url($registration->ktm_path) }}" target="_blank" class="px-4 py-2 bg-gray-600 text-white text-xs font-bold rounded-md hover:bg-gray-700 transition shadow-sm">
                                    Lihat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Status Pembayaran</h3>
                        @if($registration->payment)
                            <div class="text-center mb-4">
                                @if($registration->payment->status == 'verified')
                                    <div class="bg-green-100 text-green-800 py-3 px-4 rounded-lg font-bold border border-green-200 flex flex-col items-center">
                                        <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        LUNAS (Verified)
                                    </div>
                                @elseif($registration->payment->status == 'rejected')
                                    <div class="bg-red-100 text-red-800 py-3 px-4 rounded-lg font-bold border border-red-200 flex flex-col items-center">
                                        <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        DITOLAK
                                    </div>
                                @else
                                    <div class="bg-yellow-100 text-yellow-800 py-3 px-4 rounded-lg font-bold border border-yellow-200 flex flex-col items-center">
                                        <svg class="w-8 h-8 mb-1 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        MENUNGGU VERIFIKASI
                                    </div>
                                @endif
                            </div>
                            
                            <div class="text-center">
                                <p class="text-xs text-gray-500 mb-2">Total: <strong>Rp {{ number_format($registration->payment->amount, 0, ',', '.') }}</strong></p>
                                <a href="{{ route('admin.payments.review', $registration->payment->id) }}" class="block w-full py-2 px-4 bg-indigo-50 text-indigo-700 text-sm font-bold rounded hover:bg-indigo-100 border border-indigo-200 transition">
                                    Kelola Pembayaran &rarr;
                                </a>
                            </div>
                        @else
                            <div class="bg-gray-100 text-gray-500 p-4 rounded-lg text-center border border-gray-200">
                                <svg class="w-8 h-8 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                <span class="font-medium">Belum Upload Bukti</span>
                            </div>
                        @endif
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Bukti Persyaratan</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <p class="text-xs font-bold text-gray-500 uppercase">Share Pamflet</p>
                                    <a href="{{ Storage::url($registration->share_pamflet_path) }}" target="_blank" class="text-xs text-indigo-600 hover:underline">Buka Asli</a>
                                </div>
                                <div class="h-32 w-full rounded-lg overflow-hidden border border-gray-200 bg-gray-50 flex items-center justify-center group relative">
                                    @if(Str::endsWith($registration->share_pamflet_path, '.pdf'))
                                        <div class="text-gray-500 flex flex-col items-center">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 2H7a2 2 0 00-2 2v15a2 2 0 002 2z"></path></svg>
                                            <span class="text-xs mt-1">PDF File</span>
                                        </div>
                                    @else
                                        <img src="{{ Storage::url($registration->share_pamflet_path) }}" class="w-full h-full object-cover">
                                    @endif
                                    <a href="{{ Storage::url($registration->share_pamflet_path) }}" target="_blank" class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="text-white font-bold text-sm border border-white px-3 py-1 rounded">Lihat</span>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <p class="text-xs font-bold text-gray-500 uppercase">Twibbon</p>
                                    <a href="{{ Storage::url($registration->twibbon_path) }}" target="_blank" class="text-xs text-indigo-600 hover:underline">Buka Asli</a>
                                </div>
                                <div class="h-32 w-full rounded-lg overflow-hidden border border-gray-200 bg-gray-50 flex items-center justify-center group relative">
                                    @if(Str::endsWith($registration->twibbon_path, '.pdf'))
                                        <div class="text-gray-500 flex flex-col items-center">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 2H7a2 2 0 00-2 2v15a2 2 0 002 2z"></path></svg>
                                            <span class="text-xs mt-1">PDF File</span>
                                        </div>
                                    @else
                                        <img src="{{ Storage::url($registration->twibbon_path) }}" class="w-full h-full object-cover">
                                    @endif
                                    <a href="{{ Storage::url($registration->twibbon_path) }}" target="_blank" class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="text-white font-bold text-sm border border-white px-3 py-1 rounded">Lihat</span>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <p class="text-xs font-bold text-gray-500 uppercase">Follow Medsos</p>
                                    <a href="{{ Storage::url($registration->follow_medsos_path) }}" target="_blank" class="text-xs text-indigo-600 hover:underline">Buka Asli</a>
                                </div>
                                <div class="h-32 w-full rounded-lg overflow-hidden border border-gray-200 bg-gray-50 flex items-center justify-center group relative">
                                    @if(Str::endsWith($registration->follow_medsos_path, '.pdf'))
                                        <div class="text-gray-500 flex flex-col items-center">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 2H7a2 2 0 00-2 2v15a2 2 0 002 2z"></path></svg>
                                            <span class="text-xs mt-1">PDF File</span>
                                        </div>
                                    @else
                                        <img src="{{ Storage::url($registration->follow_medsos_path) }}" class="w-full h-full object-cover">
                                    @endif
                                    <a href="{{ Storage::url($registration->follow_medsos_path) }}" target="_blank" class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="text-white font-bold text-sm border border-white px-3 py-1 rounded">Lihat</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>