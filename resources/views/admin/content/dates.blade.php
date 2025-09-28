<x-admin-layout>
    <x-slot name="header">Edit Tanggal Penting</x-slot>
    <div class="bg-white p-6 rounded-lg shadow-md">
        @if (session('success'))
            <div class="mb-4 bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.content.dates.update') }}">
            @csrf
            <div class="space-y-4">
                <div>
                    <x-input-label for="registration_opens_date">Pendaftaran Dibuka</x-input-label>
                    <x-text-input type="date" name="registration_opens_date" class="w-full" :value="$settings['registration_opens_date'] ?? ''" />
                </div>
                <div>
                    <x-input-label for="registration_closes_date">Pendaftaran Ditutup</x-input-label>
                    <x-text-input type="date" name="registration_closes_date" class="w-full" :value="$settings['registration_closes_date'] ?? ''" />
                </div>
                <div>
                    <x-input-label for="submission_deadline_date">Batas Akhir Submission Paper</x-input-label>
                    <x-text-input type="date" name="submission_deadline_date" class="w-full" :value="$settings['submission_deadline_date'] ?? ''" />
                </div>
                <div>
                    <x-input-label for="conference_starts_date">Konferensi Dimulai</x-input-label>
                    <x-text-input type="date" name="conference_starts_date" class="w-full" :value="$settings['conference_starts_date'] ?? ''" />
                </div>
                <div>
                    <x-input-label for="conference_ends_date">Konferensi Selesai</x-input-label>
                    <x-text-input type="date" name="conference_ends_date" class="w-full" :value="$settings['conference_ends_date'] ?? ''" />
                </div>
            </div>
            <div class="mt-6">
                <x-primary-button>Simpan Perubahan</x-primary-button>
            </div>
        </form>
    </div>
</x-admin-layout>