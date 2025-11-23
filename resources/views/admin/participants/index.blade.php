<x-admin-layout>
    <x-slot name="header">
        Manajemen Tim & Karya
    </x-slot>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Daftar Tim Terdaftar</h2>

        <!-- Form Pencarian dan Filter -->
        <form method="GET" action="{{ route('admin.participants.index') }}" class="mb-6 flex flex-col md:flex-row gap-4 items-end">
            <div class="flex-grow">
                <label for="search" class="block text-sm font-medium text-gray-700">Cari Tim / Ketua</label>
                <input type="text" name="search" id="search" placeholder="Nama Tim, Ketua, atau Email..." value="{{ request('search') }}" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="flex-shrink-0">
                <label for="payment_status" class="block text-sm font-medium text-gray-700">Status Pembayaran</label>
                <select name="payment_status" id="payment_status" class="mt-1 w-full md:w-auto border-gray-300 rounded-md shadow-sm">
                    <option value="">Semua Status</option>
                    <option value="paid" @selected(request('payment_status') == 'paid')>Sudah Lunas</option>
                    <option value="unpaid" @selected(request('payment_status') == 'unpaid')>Belum Lunas</option>
                </select>
            </div>
            <div class="flex-shrink-0 flex items-center space-x-2">
                <button type="submit" class="w-full px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">
                    Filter
                </button>
                <a href="{{ route('admin.participants.export', request()->query()) }}" class="w-full px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 text-center">
                    Ekspor
                </a>
            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tim / Ketua</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Institusi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status Bayar</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($registrations as $registration)
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full object-cover" src="{{ $registration->user->avatar ? Storage::url($registration->user->avatar) : 'https://placehold.co/40x40/E2E8F0/4A5568?text=IMG' }}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-bold text-indigo-900">{{ $registration->team_name }}</div>
                                    <div class="text-xs text-gray-500">Ketua: {{ $registration->full_name }}</div>
                                    <div class="text-xs text-gray-400">{{ $registration->user->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $registration->institution }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                {{ $registration->participant_type }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            @if($registration->payment?->status == 'Verified')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Lunas</span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Belum Lunas</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="{{ route('admin.participants.show', $registration) }}" class="text-indigo-600 hover:text-indigo-900 font-bold">Lihat Berkas</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                            Tidak ada data tim yang ditemukan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-6">
            {{ $registrations->appends(request()->query())->links() }}
        </div>
    </div>
</x-admin-layout>