<x-admin-layout>
    <x-slot name="header">Kirim Pengumuman Email</x-slot>

    <div class="bg-white p-6 rounded-lg shadow-md">
        @if (session('success'))
            <div class="mb-4 bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="mb-4 bg-red-100 border-red-400 text-red-700 px-4 py-3 rounded">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.communication.send') }}">
            @csrf
            <div class="space-y-4">
                <div>
                    <x-input-label for="target_group">Kirim Ke:</x-input-label>
                    <select name="target_group" id="target_group" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="all">Semua Peserta</option>
                        <option value="presenters">Hanya Presenter</option>
                        <option value="accepted_presenters">Presenter (Paper Diterima)</option>
                        <option value="unpaid">Peserta Belum Lunas</option>
                    </select>
                </div>
                <div>
                    <x-input-label for="subject">Subjek Email:</x-input-label>
                    <x-text-input type="text" name="subject" class="w-full" required />
                </div>
                <div>
                    <x-input-label for="body">Isi Email (Bisa menggunakan HTML):</x-input-label>
                    <textarea name="body" rows="15" class="mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
                </div>
            </div>
            <div class="mt-6">
                <x-primary-button>Kirim Email Massal</x-primary-button>
            </div>
        </form>
    </div>
</x-admin-layout>