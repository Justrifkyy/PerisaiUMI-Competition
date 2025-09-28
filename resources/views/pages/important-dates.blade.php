<x-public-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold">Tanggal Penting</h1>
        <ul class="mt-4 list-disc list-inside space-y-2">
            <li>Pendaftaran Dibuka: <strong>{{ \Carbon\Carbon::parse($settings['registration_opens_date'])->format('d F Y') }}</strong></li>
            <li>Batas Akhir Submission Paper: <strong>{{ \Carbon\Carbon::parse($settings['submission_deadline_date'])->format('d F Y') }}</strong></li>
            <li>Pendaftaran Ditutup: <strong>{{ \Carbon\Carbon::parse($settings['registration_closes_date'])->format('d F Y') }}</strong></li>
            <li>Pelaksanaan Konferensi: <strong>{{ \Carbon\Carbon::parse($settings['conference_starts_date'])->format('d F Y') }} - {{ \Carbon\Carbon::parse($settings['conference_ends_date'])->format('d F Y') }}</strong></li>
        </ul>
    </div>
</x-public-layout>