<x-admin-layout>
    <x-slot name="header">
        Review Pembayaran
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('admin.payments.index') }}" class="text-indigo-600 hover:underline mb-4 inline-block">&larr; Kembali ke Daftar</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        
                        <div>
                            <h3 class="font-bold text-lg mb-4 text-gray-800">Bukti Transfer</h3>
                            <div class="border rounded-lg p-2 bg-gray-50 flex items-center justify-center min-h-[300px]">
                                @if(Str::endsWith($payment->proof_path, '.pdf'))
                                    <div class="text-center">
                                        <svg class="w-16 h-16 mx-auto text-red-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 2H7a2 2 0 00-2 2v15a2 2 0 002 2z"></path></svg>
                                        <p class="mb-3">File format PDF</p>
                                        <a href="{{ Storage::url($payment->proof_path) }}" target="_blank" class="text-blue-600 underline font-bold">Download / Lihat PDF</a>
                                    </div>
                                @else
                                    <a href="{{ Storage::url($payment->proof_path) }}" target="_blank">
                                        <img src="{{ Storage::url($payment->proof_path) }}" alt="Bukti Transfer" class="max-w-full h-auto rounded shadow hover:scale-105 transition-transform duration-300">
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div>
                            <h3 class="font-bold text-lg mb-4 text-gray-800">Detail Pembayaran</h3>
                            
                            <dl class="space-y-4 mb-8">
                                <div>
                                    <dt class="text-xs text-gray-500 uppercase">Nama Tim</dt>
                                    <dd class="font-bold text-lg">{{ $payment->registration->team_name }}</dd>
                                </div>
                                <div>
                                    <dt class="text-xs text-gray-500 uppercase">Nama Penyetor</dt>
                                    <dd class="font-medium">{{ $payment->registration->full_name }}</dd>
                                </div>
                                <div>
                                    <dt class="text-xs text-gray-500 uppercase">Nominal</dt>
                                    <dd class="font-bold text-xl text-indigo-600">Rp {{ number_format($payment->amount, 0, ',', '.') }}</dd>
                                </div>
                                <div>
                                    <dt class="text-xs text-gray-500 uppercase">Status Saat Ini</dt>
                                    <dd>
                                        @if($payment->status == 'pending')
                                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm font-bold">Pending</span>
                                        @elseif($payment->status == 'verified')
                                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm font-bold">Verified</span>
                                        @else
                                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-sm font-bold">Rejected</span>
                                        @endif
                                    </dd>
                                </div>
                            </dl>

                            <hr class="my-6">

                            <form action="{{ route('admin.payments.process', $payment->id) }}" method="POST" class="space-y-4">
                                @csrf
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Catatan Admin (Opsional)</label>
                                    <textarea name="admin_notes" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Contoh: Nominal kurang, atau Pembayaran diterima">{{ $payment->admin_notes }}</textarea>
                                    <p class="text-xs text-gray-500 mt-1">Catatan ini akan dilihat oleh peserta jika ditolak.</p>
                                </div>

                                <div class="flex gap-3 pt-2">
                                    <button type="submit" name="status" value="rejected" class="flex-1 bg-white text-red-600 border border-red-300 py-2 px-4 rounded-md hover:bg-red-50 font-bold transition" onclick="return confirm('Yakin ingin menolak pembayaran ini?')">
                                        ✘ Tolak
                                    </button>

                                    <button type="submit" name="status" value="verified" class="flex-1 bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 font-bold transition shadow-lg hover:shadow-xl" onclick="return confirm('Yakin ingin memverifikasi pembayaran ini?')">
                                        ✔ Verifikasi Lunas
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>