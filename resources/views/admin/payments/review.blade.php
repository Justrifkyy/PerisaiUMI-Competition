<x-admin-layout>
    <x-slot name="header">Tinjau Pembayaran: {{ $payment->registration->full_name }}</x-slot>

    <form method="POST" action="{{ route('admin.payments.process', $payment) }}">
        @csrf
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-md space-y-6">
                <h3 class="text-xl font-semibold border-b pb-2">Data Peserta</h3>
                <p><strong>Nama:</strong> {{ $payment->registration->full_name }}</p>
                <p><strong>Email:</strong> {{ $payment->registration->user->email }}</p>
                <p><strong>Institusi:</strong> {{ $payment->registration->institution }}</p>
                <p><strong>Berkas:</strong> 
                    <a href="{{ Storage::url($payment->registration->identity_card_path) }}" target="_blank" class="text-blue-600 hover:underline">Lihat KTP</a> | 
                    @if($payment->registration->cv_path)
                        <a href="{{ Storage::url($payment->registration->cv_path) }}" target="_blank" class="text-blue-600 hover:underline">Lihat CV</a>
                    @endif
                </p>
                <h3 class="text-xl font-semibold border-t pt-6 pb-2">Bukti Pembayaran</h3>
                <img src="{{ Storage::url($payment->payment_proof_path) }}" alt="Bukti Pembayaran" class="w-full max-w-lg border rounded-md">
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md h-fit">
                <h3 class="text-xl font-semibold mb-4">Keputusan Verifikasi</h3>
                <div class="space-y-4">
                    <label class="flex items-center">
                        <input type="radio" name="status" value="Verified" class="form-radio h-5 w-5 text-green-600" checked>
                        <span class="ml-3 text-lg">Approve (Setujui Pembayaran)</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="status" value="Rejected" class="form-radio h-5 w-5 text-red-600">
                        <span class="ml-3 text-lg">Reject (Tolak Pembayaran)</span>
                    </label>
                </div>
                <div class="mt-6">
                    <label for="admin_notes" class="block font-medium text-gray-700">Catatan (Wajib diisi jika menolak):</label>
                    <textarea name="admin_notes" rows="4" class="mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    @error('admin_notes') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="w-full mt-6 py-3 bg-gray-800 text-white font-bold rounded-md hover:bg-gray-700">
                    Kirim Konfirmasi
                </button>
            </div>
        </div>
    </form>
</x-admin-layout>