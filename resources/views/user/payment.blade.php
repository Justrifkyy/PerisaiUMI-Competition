<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Upload Bukti Pembayaran
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">

                    @if (session('status'))
                        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('status') }}</span>
                        </div>
                    @endif

                    <div class="mb-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                        <h4 class="font-semibold text-lg">Detail Registrasi Anda:</h4>
                        <p class="mt-1">Nama: <strong>{{ $registration->full_name }}</strong></p>
                        <p>Paket Dipilih: <strong>{{ $registration->package_choice }}</strong></p>
                        <p class="mt-2 text-sm text-gray-600">Silakan lakukan transfer sesuai tagihan paket yang Anda pilih, lalu unggah bukti transfer di bawah ini.</p>
                    </div>

                    <form method="POST" action="{{ route('payment.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-input-label for="amount" :value="__('Jumlah yang Ditransfer (tanpa titik atau koma)')" />
                            <x-text-input id="amount" class="block mt-1 w-full" type="number" name="amount" :value="old('amount')" required />
                            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                        </div>

                        <div class="mt-6">
                            <x-input-label for="payment_proof" :value="__('File Bukti Pembayaran (.jpg, .png, .pdf)')" />
                            <input id="payment_proof" name="payment_proof" type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 mt-2" required>
                            <x-input-error :messages="$errors->get('payment_proof')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-8">
                            <x-primary-button>
                                {{ __('Kirim Bukti Pembayaran') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>