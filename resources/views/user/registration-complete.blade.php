<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Status Pendaftaran
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Pesan Selamat Datang -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="text-2xl font-bold text-green-600">Pendaftaran Berhasil!</h3>
                <p class="mt-2 text-gray-700">
                    Selamat datang, <strong>{{ $registration->full_name }}</strong>! Anda telah terdaftar sebagai <strong>{{ $registration->participant_type }}</strong> di Konferensi LONTARA 2025.
                </p>
                <p class="mt-1 text-sm text-gray-500">
                    Pembayaran Anda telah kami verifikasi. Terima kasih atas partisipasi Anda.
                </p>
            </div>

            <!-- Bagian Submission Paper (Hanya untuk Presenter) -->
            @if($registration->participant_type == 'Presenter')
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8 text-gray-900">
                        <h3 class="text-xl font-semibold mb-4">Submission Paper</h3>
                        <p class="mb-4 text-gray-600">
                            Sebagai presenter, Anda dapat mengirimkan atau memperbarui paper Anda melalui formulir di bawah ini.
                        </p>
                        <!-- Form Submission Paper -->
                        @include('user.partials.submission-form')
                    </div>
                </div>

                <!-- Riwayat Submission -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8 text-gray-900">
                        <h3 class="text-xl font-semibold mb-4">Riwayat Submission Anda</h3>
                        @if($submissions->isEmpty())
                            <p>Anda belum pernah melakukan submission paper.</p>
                        @else
                            @include('user.partials.submission-history', ['submissions' => $submissions])
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>