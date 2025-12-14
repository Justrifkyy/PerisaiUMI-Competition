<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Tim: {{ $registration->team_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('admin.dashboard') }}" class="mb-4 inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Dashboard
            </a>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 space-y-6">
                    
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Informasi Tim</h3>
                        <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                            <div>
                                <dt class="text-xs font-bold text-gray-400 uppercase tracking-wider">Nama Tim</dt>
                                <dd class="text-lg font-bold text-gray-900 mt-1">{{ $registration->team_name }}</dd>
                            </div>
                            <div>
                                <dt class="text-xs font-bold text-gray-400 uppercase tracking-wider">Asal Instansi</dt>
                                <dd class="text-lg font-medium text-gray-900 mt-1">{{ $registration->institution }}</dd>
                            </div>
                            <div>
                                <dt class="text-xs font-bold text-gray-400 uppercase tracking-wider">Kategori Lomba</dt>
                                <dd class="mt-1">
                                    @if($registration->participant_type == 'Tahap Awal')
                                        <span class="bg-green-100 text-green-800 text-sm font-bold px-3 py-1 rounded-full">Early Stage</span>
                                    @else
                                        <span class="bg-blue-100 text-blue-800 text-sm font-bold px-3 py-1 rounded-full">Growth Stage</span>
                                    @endif
                                </dd>
                            </div>
                            <div>
                                <dt class="text-xs font-bold text-gray-400 uppercase tracking-wider">Subtema / Bidang</dt>
                                <dd class="text-gray-900 mt-1">{{ $registration->research_field ?? '-' }}</dd>
                            </div>
                        </dl>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Anggota Tim</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm text-left">
                                <thead class="text-xs text-gray-500 uppercase bg-gray-50 border-b">
                                    <tr>
                                        <th class="px-4 py-3 font-bold">Peran</th>
                                        <th class="px-4 py-3 font-bold">Nama Lengkap</th>
                                        <th class="px-4 py-3 font-bold">NIM</th>
                                        <th class="px-4 py-3 font-bold">Program Studi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr class="bg-yellow-50/50">
                                        <td class="px-4 py-3">
                                            <span class="text-yellow-600 font-bold bg-yellow-100 px-2 py-0.5 rounded text-xs">KETUA</span>
                                        </td>
                                        <td class="px-4 py-3 font-semibold text-gray-900">{{ $registration->full_name }}</td>
                                        <td class="px-4 py-3 text-gray-500">{{ $registration->nim ?? '-' }}</td>
                                        <td class="px-4 py-3 text-gray-500">{{ $registration->major ?? '-' }}</td>
                                    </tr>
                                    @foreach($registration->teamMembers as $index => $member)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-3 text-gray-500">Anggota {{ $index + 1 }}</td>
                                        <td class="px-4 py-3 font-medium text-gray-900">{{ $member->name }}</td>
                                        <td class="px-4 py-3 text-gray-500">{{ $member->nim }}</td>
                                        <td class="px-4 py-3 text-gray-500">{{ $member->major }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Berkas Utama</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <a href="{{ Storage::url($registration->proposal_path) }}" target="_blank" class="flex flex-col items-center justify-center p-6 bg-red-50 border border-red-100 rounded-xl hover:bg-red-100 hover:border-red-200 transition group text-center h-full">
                                <svg class="w-10 h-10 text-red-500 mb-3 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 2H7a2 2 0 00-2 2v15a2 2 0 002 2z"></path></svg>
                                <span class="font-bold text-red-700">Proposal Bisnis</span>
                                <span class="text-xs text-red-500 mt-1">Download PDF</span>
                            </a>
                            
                            <a href="{{ Storage::url($registration->bmc_path) }}" target="_blank" class="flex flex-col items-center justify-center p-6 bg-blue-50 border border-blue-100 rounded-xl hover:bg-blue-100 hover:border-blue-200 transition group text-center h-full">
                                <svg class="w-10 h-10 text-blue-500 mb-3 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <span class="font-bold text-blue-700">Business Model Canvas</span>
                                <span class="text-xs text-blue-500 mt-1">Download PDF</span>
                            </a>

                            <a href="{{ Storage::url($registration->ktm_path) }}" target="_blank" class="flex flex-col items-center justify-center p-6 bg-green-50 border border-green-100 rounded-xl hover:bg-green-100 hover:border-green-200 transition group text-center h-full">
                                <svg class="w-10 h-10 text-green-500 mb-3 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                                <span class="font-bold text-green-700">Scan KTM</span>
                                <span class="text-xs text-green-500 mt-1">Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-indigo-100 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-indigo-50 rounded-bl-full -mr-4 -mt-4"></div>
                        <h3 class="text-lg font-bold text-gray-800 mb-4 relative z-10">Status Pembayaran</h3>
                        
                        @if($registration->payment)
                            <div class="mb-6 relative z-10">
                                <p class="text-xs text-gray-500 uppercase tracking-wide font-bold">Nominal Transfer</p>
                                <p class="text-3xl font-black text-indigo-600">Rp {{ number_format($registration->payment->amount, 0, ',', '.') }}</p>
                                <p class="text-xs text-gray-400 mt-1">Diupload pada: {{ $registration->payment->created_at->format('d M Y, H:i') }}</p>
                            </div>

                            <div class="mb-6">
                                <p class="text-xs text-gray-500 uppercase tracking-wide font-bold mb-2">Bukti Transfer:</p>
                                <a href="{{ Storage::url($registration->payment->proof_path) }}" target="_blank" class="block group relative overflow-hidden rounded-lg border border-gray-200">
                                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="text-white font-bold text-sm">Lihat Gambar</span>
                                    </div>
                                    @if(Str::endsWith($registration->payment->proof_path, '.pdf'))
                                        <div class="h-32 bg-gray-100 flex items-center justify-center text-gray-500">
                                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 2H7a2 2 0 00-2 2v15a2 2 0 002 2z"></path></svg>
                                        </div>
                                    @else
                                        <img src="{{ Storage::url($registration->payment->proof_path) }}" class="w-full h-auto object-cover">
                                    @endif
                                </a>
                            </div>

                            @if($registration->payment->status !== 'verified')
                                <form action="{{ route('admin.registrations.verify-payment', $registration->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full bg-green-600 text-white py-3 px-4 rounded-lg hover:bg-green-700 transition font-bold shadow-md hover:shadow-lg flex items-center justify-center gap-2" onclick="return confirm('Yakin ingin memverifikasi pembayaran tim ini?')">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        Verifikasi Pembayaran
                                    </button>
                                </form>
                            @else
                                <div class="bg-green-100 text-green-800 text-center py-3 rounded-lg font-bold border border-green-200 flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    SUDAH DIVERIFIKASI
                                </div>
                            @endif
                        @else
                            <div class="bg-red-50 text-red-600 p-4 rounded-lg text-center border border-red-100">
                                <svg class="w-8 h-8 mx-auto mb-2 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <p class="font-bold">Belum ada pembayaran</p>
                                <p class="text-xs mt-1">Peserta belum mengunggah bukti transfer.</p>
                            </div>
                        @endif
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Bukti Persyaratan</h3>
                        <ul class="space-y-4">
                            <li>
                                <a href="{{ Storage::url($registration->share_pamflet_path) }}" target="_blank" class="flex items-center justify-between group p-3 rounded-lg hover:bg-gray-50 transition border border-gray-100">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                                        </div>
                                        <span class="font-medium text-gray-700 group-hover:text-purple-700">Share Pamflet</span>
                                    </div>
                                    <span class="text-xs bg-gray-100 px-2 py-1 rounded text-gray-500 group-hover:bg-purple-100 group-hover:text-purple-700">Lihat</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ Storage::url($registration->twibbon_path) }}" target="_blank" class="flex items-center justify-between group p-3 rounded-lg hover:bg-gray-50 transition border border-gray-100">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-pink-100 text-pink-600 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        </div>
                                        <span class="font-medium text-gray-700 group-hover:text-pink-700">Bukti Twibbon</span>
                                    </div>
                                    <span class="text-xs bg-gray-100 px-2 py-1 rounded text-gray-500 group-hover:bg-pink-100 group-hover:text-pink-700">Lihat</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ Storage::url($registration->follow_medsos_path) }}" target="_blank" class="flex items-center justify-between group p-3 rounded-lg hover:bg-gray-50 transition border border-gray-100">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                        </div>
                                        <span class="font-medium text-gray-700 group-hover:text-blue-700">Follow Medsos</span>
                                    </div>
                                    <span class="text-xs bg-gray-100 px-2 py-1 rounded text-gray-500 group-hover:bg-blue-100 group-hover:text-blue-700">Lihat</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>