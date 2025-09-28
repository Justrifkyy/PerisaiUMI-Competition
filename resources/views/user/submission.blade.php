<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Submission Paper
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    <h3 class="text-xl font-semibold mb-4">Kirim Paper Baru</h3>
                    <form method="POST" action="{{ route('submission.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="title" :value="__('Judul Paper/Abstrak')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                             <div>
                                <x-input-label for="authors" :value="__('Penulis (Contoh: John Doe, Jane Smith)')" />
                                <x-text-input id="authors" class="block mt-1 w-full" type="text" name="authors" :value="old('authors')" required />
                                <x-input-error :messages="$errors->get('authors')" class="mt-2" />
                            </div>
                             <div>
                                <x-input-label for="topic" :value="__('Topik Penelitian')" />
                                <x-text-input id="topic" class="block mt-1 w-full" type="text" name="topic" :value="old('topic')" required />
                                <x-input-error :messages="$errors->get('topic')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="paper" :value="__('File Paper (.doc, .docx, .pdf)')" />
                                <input id="paper" name="paper" type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 mt-2" required>
                                <x-input-error :messages="$errors->get('paper')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Submit Paper') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    <h3 class="text-xl font-semibold mb-4">Riwayat Submission Anda</h3>
                    @if($submissions->isEmpty())
                        <p>Anda belum pernah melakukan submission paper.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Submit</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($submissions as $submission)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->title }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $submission->created_at->format('d M Y') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                {{ $submission->status }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>