<x-admin-layout>
    <x-slot name="header">
        Detail Peserta: {{ $registration->full_name }}
    </x-slot>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2 space-y-4">
                <div>
                    <h4 class="font-semibold text-gray-600">Nama Lengkap</h4>
                    <p class="text-lg">{{ $registration->full_name }}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-600">Email</h4>
                    <p class="text-lg">{{ $registration->user->email }}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-600">Institusi & Jabatan</h4>
                    <p class="text-lg">{{ $registration->institution }} - {{ $registration->position }}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-600">Nomor Telepon</h4>
                    <p class="text-lg">{{ $registration->phone_number }}</p>
                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <h4 class="font-semibold text-gray-600">Jenis Peserta</h4>
                    <p class="text-lg">{{ $registration->participant_type }}</p>
                </div>
                @if($registration->research_field)
                <div>
                    <h4 class="font-semibold text-gray-600">Topik Penelitian</h4>
                    <p class="text-lg">{{ $registration->research_field }}</p>
                </div>
                @endif
                <div>
                    <h4 class="font-semibold text-gray-600">Paket Dipilih</h4>
                    <p class="text-lg">{{ $registration->package_choice }}</p>
                </div>
                 <div>
                    <h4 class="font-semibold text-gray-600">Konfirmasi Hadir</h4>
                    <p class="text-lg">{{ $registration->is_present ? 'Ya, Bersedia Hadir' : 'Tidak' }}</p>
                </div>
            </div>
        </div>

        <div class="border-t mt-6 pt-6">
             <h3 class="text-xl font-semibold mb-4">Berkas Terlampir</h3>
             <div class="flex space-x-4">
                <a href="{{ Storage::url($registration->identity_card_path) }}" target="_blank" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Unduh Kartu Identitas
                </a>
                @if($registration->cv_path)
                <a href="{{ Storage::url($registration->cv_path) }}" target="_blank" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">
                    Unduh CV
                </a>
                @endif
             </div>
        </div>
    </div>
</x-admin-layout>