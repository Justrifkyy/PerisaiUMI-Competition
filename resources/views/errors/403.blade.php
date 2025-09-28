<x-public-layout>

    <div class="flex items-center justify-center min-h-[60vh] bg-white">
        <div class="text-center">
            <div class="text-9xl font-bold text-yellow-500">403</div>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Akses Ditolak</h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Maaf, Anda tidak memiliki izin untuk mengakses halaman ini.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('home') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

</x-public-layout>