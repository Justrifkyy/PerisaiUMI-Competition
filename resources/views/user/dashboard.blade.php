<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold">Selamat Datang, {{ Auth::user()->name }}!</h3>
                    
                    <p class="mt-4">
                        Anda telah berhasil login ke sistem pendaftaran LONTARA 2025.
                    </p>

                    <div class="mt-6 border-t pt-6">
                        <p class="font-semibold">Langkah Selanjutnya:</p>
                        <ul class="list-disc list-inside mt-2">
                            <li>Lengkapi data diri Anda di halaman <a href="{{ route('registration.create') }}" class="text-blue-600 hover:underline">Registrasi Konferensi</a>.</li>
                            <li>Lakukan pembayaran dan unggah bukti di halaman <a href="#" class="text-blue-600 hover:underline">Pembayaran</a>.</li>
                            <li>Jika Anda seorang presenter, kirimkan paper Anda melalui halaman <a href="#" class="text-blue-600 hover:underline">Submission Paper</a>.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>