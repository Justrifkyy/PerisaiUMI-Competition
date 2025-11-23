<x-admin-layout>
    <x-slot name="header">
        Manajemen Akun Juri
    </x-slot>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Daftar Dewan Juri</h2>
            <a href="{{ route('admin.juris.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                + Tambah Akun Juri
            </a>
        </div>

        @if (session('success'))
            <div class="mb-4 bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded">{{ session('success') }}</div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Lengkap</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email Login</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Asal Instansi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($juris as $juri)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-medium">{{ $juri->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500">{{ $juri->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500">{{ $juri->institution ?? '-' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('admin.juris.destroy', $juri) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus akun juri ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada akun juri yang dibuat.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>